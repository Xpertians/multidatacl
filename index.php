<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->config(
    [
        'templates.path' => 'templates'
    ]
);


// Set singleton value
$app->container->singleton( 'db', function () {
        try {
          $db = new PDO("sqlite:db.sqlite3");
        } catch ( PDOException $e ) {
            die( 'Error!: ' . $e->getMessage() );
        }

        return $db;
    }
);

$app->container->singleton( 'hybridInstance', function () {
    $instance = new Hybrid_Auth('config.php');
    return $instance;
});

$model = new \Model\App_Model( $app->db );

$authenticate = function ( $app ) {
    return function () use ( $app ) {
        $app->hybridInstance;
        $session_identifier = Hybrid_Auth::storage()->get('user');
        if (is_null( $session_identifier ) && $app->request()->getPathInfo() != '/login/') {
            $app->redirect( '/login/' );
        }
    };
};

$app->get( '/', $authenticate($app), function () use ( $app ) {
        $app->redirect( '/home/' );
    }
);

$app->get( '/logout/', function () use ( $app, $model ) {
        $app->hybridInstance;
        $model->logout_user();
        Hybrid_Auth::logoutAllProviders();
        $app->redirect( '/login/' );
    }
);

$app->get( '/login/', $authenticate( $app ), function () use ( $app ) {
        $app->render( 'login.php' );
    }
);

$app->get( '/search/', $authenticate($app), function () use ( $app ) {
        $app->redirect( '/home/' );
    }
);

$app->get( '/search/:driver', $authenticate($app), function ( $driver ) use ( $app, $model ) {
        $app->redirect( '/home/' );
    }
);

$app->post('/search/:driver', $authenticate($app), function ( $driver ) use ( $app, $model ) {
        $request    = $app->request();
        $body       = $request->getBody();
        $input      = json_decode($body);
        header('Content-type: application/json');
        echo json_encode( array(
          'qry'     => (string)$input->qry,
          'driver'  => $driver
        ));

    }
);

$app->get( '/login/:idp', function ( $idp ) use ( $app, $model ) {
        try {
            $adapter      = $app->hybridInstance->authenticate( ucwords( $idp ) );
            $user_profile = $adapter->getUserProfile();
            if (empty( $user_profile )) {
                $app->redirect( '/login/?err=1' );
            }
            $identifier = $user_profile->identifier;
            if ($model->identifier_exists( $identifier )) {
                $model->login_user( $identifier );
                $app->redirect( '/home/' );
            } else {
                $register = $model->register_user(
                    $identifier,
                    $user_profile->email,
                    $user_profile->firstName,
                    $user_profile->lastName,
                    $user_profile->photoURL
                );
                if ($register) {
                    $model->login_user( $identifier );
                    $app->redirect( '/home/' );
                }
            }
        } catch ( Exception $e ) {
            echo $e->getMessage();
        }
    }
);

$app->get( '/home/', $authenticate( $app ), function () use ( $app, $model ) {
        $app->render( 'home.php', [ 'model' => $model ] );
    }
);

$app->get( '/home/:qry', function ( $qry ) use ( $app, $model ) {
        switch($qry){
            case "cars":
                 $app->render( 'cars.php', [ 'model' => $model ] );
            break;
            default:
                 $app->redirect( '/home/' );
            break;
        }
    }
);

$app->run();
