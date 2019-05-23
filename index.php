<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'cfg_odc.php';
define("CLIENT_ID", $clientId, true);
define("SECRET_KEY", $secretKey, true);
define("ODC_SRV", $odc, true);
define("ODC_DB", $dbname, true);


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
          $db = new PDO("sqlite:".ODC_DB);
        } catch ( PDOException $e ) {
            die( 'Error!: ' . $e->getMessage() );
        }

        return $db;
    }
);

$app->container->singleton( 'hybridInstance', function () {
    $instance = new Hybrid_Auth('cfg_hybrid.php');
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
        $input      = json_decode(json_encode($input), true);

        $input      = strtoupper(preg_replace("/[^a-zA-Z0-9]+/", "", $input['qry']));

        if(strlen($input)==5){
          $isValid  = (preg_match("/[A-Za-z]{2}[0-9]{3}/",$input) === 1) ? true : false;
          if($isValid){
            $head   = substr($input, 0, 2);
            $tail   = substr($input, -3);
            $input  = $head."0".$tail;
          }
        }elseif(strlen($input)==6){
          $isValid  = (preg_match("/[A-Za-z]{2}[A-Za-z0-9]{2}[0-9]{2}/",$input) === 1) ? true : false;
        }else{
          $isValid  = false;
        }

        if(!$isValid){
          echo "<p align=center>
                  <font color=red>
                    <b>Formato patente incorrecto</b><br>
                    Para patentes de motos debe agregar un 0, por ejemplo AB123 debe ser AB0123.
                  </font>
                </p>";
        }else{
          $guzzle     = $app->container->httpClient;
          $url        = ODC_SRV."/api/token";

          $response   = $guzzle->post(
            $url,
            [
              'headers' =>  [
                'User-Agent'      => 'testing/1.0',
                'Content-Type'    => 'application/x-www-form-urlencoded; charset=utf-8'
              ],
              'form_params' => [
                  'client_id'     => CLIENT_ID,
                  'client_secret' => SECRET_KEY,
                  'grant_type'    => 'client_credentials',
              ]
            ]
          );

          $body       = json_decode((string) $response->getBody()->getContents(), true);
          $token      = $body["access_token"];

          $url        = "https://opendatacollector.com/api/exec/1541878145/".$input;
          $response   = $guzzle->post(
            $url,
            [
              'headers' =>  [
                'User-Agent'      => 'testing/1.0',
                'Content-Type'    => 'application/x-www-form-urlencoded; charset=utf-8'
              ],
              'form_params' => [
                  'access_token'  => $token
              ]
            ]
          );
          $eTime    = (time()-$sTime);
          $body     = json_decode((string) $response->getBody()->getContents(), true);
          if(array_key_exists('success', $body)){
            if($body['success']){
              $data     = reset($body["data"]);
              $payload  = $data['payload'];
              $stolen   = $payload['stolen'];
            }else{
              $stolen   = 'Error al consultar';
            }
          }else{
            $stolen   = 'Error al consultar';
          }

          $url        = "https://opendatacollector.com/api/exec/1542152652/".$input;
          $response   = $guzzle->post(
            $url,
            [
              'headers' =>  [
                'User-Agent'      => 'testing/1.0',
                'Content-Type'    => 'application/x-www-form-urlencoded; charset=utf-8'
              ],
              'form_params' => [
                  'access_token'  => $token
              ]
            ]
          );
          $eTime    = (time()-$sTime);
          $body     = json_decode((string) $response->getBody()->getContents(), true);
          if(array_key_exists('success', $body)){
            if($body['success']){
              $data               = reset($body["data"]);
              $payload            = $data['payload'];
              $payload['stolen']  = $stolen;
              $app->render( 'car_details.php', $payload);
            }else{
              echo "ERR";
            }
          }else{
            echo "ERR";
          }

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
