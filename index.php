<?php
echo $_SERVER['HTTP_HOST'];
exit;

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

use GuzzleHttp\Client;

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


$app->container['httpClient'] = function ($cntr) {
    return new Client();
};

$model  = new \Model\App_Model( $app->db );

$authenticate = function ( $app ) {
    return function () use ( $app ) {
        $app->hybridInstance;
        $session_identifier = Hybrid_Auth::storage()->get('user');
        if (is_null( $session_identifier ) && $app->request()->getPathInfo() != '/login/') {
            $app->redirect( '/login/' );
        }
    };
};

$app->get( '/', function () use ( $app ) {
        $app->hybridInstance;
        $session_identifier = Hybrid_Auth::storage()->get('user');
        if (is_null( $session_identifier )) {
            $app->render( 'main.php' );
        }else{
            $app->redirect( '/home/' );
        }
    }
);

$app->get( '/logout/', function () use ( $app, $model ) {
        $app->hybridInstance;
        $model->logout_user();
        Hybrid_Auth::logoutAllProviders();
        $app->redirect( '/' );
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
        $sTime      = time();
        $request    = $app->request();
        $body       = $request->getBody();
        $input      = json_decode($body);

        $guzzle     = $app->container->httpClient;

        $clientId   = "FQyDaVCyTOvCOHRSN5TeR8";
        $secretKey  = "bZhlyXsAuzm9oyb5b4DAx817vbJXdKW5";
        $url        = "https://opendatacollector.com/api/token";

        $response   = $guzzle->post(
          $url,
          [
            'headers' =>  [
              'User-Agent'      => 'testing/1.0',
              'Content-Type'    => 'application/x-www-form-urlencoded; charset=utf-8'
            ],
            'form_params' => [
                'client_id'     => $clientId,
                'client_secret' => $secretKey,
                'grant_type'    => 'client_credentials',
            ]
          ]
        );
        $body        = json_decode((string) $response->getBody()->getContents(), true);

        $input      = json_decode(json_encode($input), true);
        $input      = preg_replace("/[^a-zA-Z0-9]+/", "", $input['qry']);
        $url        = "https://opendatacollector.com/api/exec/1542152652/".$input;

        $response   = $guzzle->post(
          $url,
          [
            'headers' =>  [
              'User-Agent'      => 'testing/1.0',
              'Content-Type'    => 'application/x-www-form-urlencoded; charset=utf-8'
            ],
            'form_params' => [
                'access_token'  => $body["access_token"]
            ]
          ]
        );

        $eTime    = (time()-$sTime);
        $body     = json_decode((string) $response->getBody()->getContents(), true);

        if(array_key_exists('success', $body)){
          if($body['success']){
            $data     = reset($body["data"]);
            $payload  = $data['payload'];
            //var_dump($payload);
            $app->render( 'car_details.php', $payload);
          }else{
            echo "ERR";
          }
        }else{
          echo "ERR";
        }
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
        //$app->render( 'home.php', [ 'model' => $model ] );
        $app->redirect( '/home/cars' );
    }
);

$app->get( '/home/:qry', $authenticate( $app ), function ( $qry ) use ( $app, $model ) {
        switch($qry){
            case "cars":
                 $app->render( 'cars.php', [ 'model' => $model ] );
            break;
            default:
                 $app->redirect( '/home/cars' );
            break;
        }
    }
);

$app->run();
