<?php

ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

require "vendor/autoload.php";
$web =  require "./src/Router/web.php";

use App\Controller\ControllerLogin;
use App\Entity\User;
use App\Router\DataRouter;

session_start();


$host = $_SERVER['HTTP_HOST'];
$http = $_SERVER['REQUEST_SCHEME'];

$URL_BASE =  $http."://".$host."/";
$DIR = "chatgpt/";

$URL = $URL_BASE . $DIR;




$uri = $_SERVER['REQUEST_URI'];

$uri =   parse_url($uri);

$uri = $uri['path'];



if (!is_null($DIR)) {
  $uri = str_replace($DIR, "", $uri);
}



$method = $_SERVER['REQUEST_METHOD'];
$key = $method . "|" . $uri;


if ($method === "GET") {

  $variablesMethods = $_GET;
}

if ($method === "POST") {

  $variablesMethods = $_POST;
}


$dataRouter = new DataRouter($method, $variablesMethods);

if (array_key_exists($key, $web)) {


  $data = explode("@", $web[$key]);

  $fuction = $data[1];
  $controller = new $data[0]();



  $email = $_POST['email'] ?? null;

  if (isset($email)) {
    $user = new User();
    $dataUser = $user->selectWhere("SELECT *  FROM user WHERE email ='$email';");

    if (!isset($dataUser[0]['email'])) {

      $_SESSION['msg_error'] = "Usuário ou senha incorretos.";
      header('Location:' . $URL . "login");
    }
  }

  if (isset($dataUser[0]['email'])) {

    unset($_SESSION['msg_error']);

    if ($_POST['password'] ==  password_verify($_POST['password'], $dataUser[0]['password'])) {
      //  if($_POST['password'] == $dataUser[0]['password']){

      $_SESSION['logado'] = true;
      $_SESSION['user'] =  $dataUser[0]['name'];
      $_SESSION['id'] =  $dataUser[0]['id'];


      header('Location:' . $URL);
    } else {

      $_SESSION['msg_error'] = "Usuário ou senha incorretos.";
      header('Location:' . $URL . "login");
    }
  }



  $startLogin =  isset($_SESSION['logado']) ? $_SESSION['logado'] : false;

  if ($startLogin === true ||  $uri == "/login" ||  $uri == "/logar") {

    die($controller->$fuction($dataRouter));
  }

  header('Location:' . $URL . "login");
}


echo "404";
