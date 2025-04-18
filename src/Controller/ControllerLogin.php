<?php


namespace App\Controller;

use App\Entity\User;
use App\Router\DataRouter;

class ControllerLogin{


  public function index()
  {
    global $URL_BASE;
    return include __DIR__. "/../../template/login.php";

  }


  public function store(DataRouter $router)
  {
    global $URL;
   $email = $router->post('email');
   $name = $router->post('name');
   $password = $router->post('password');
   $password = password_hash($password, PASSWORD_BCRYPT);

    $user = new User();

    $user->insert("INSERT INTO `user`(`email`, `name`, `password`) VALUES ('$email','$name','$password')");
    
    header('Location:'.$URL);
     return;
  }


  public function delete(DataRouter $router)
  {
    global $URL;
    $user = new User();
    $user->delete($router->post('delete'));
    header('Location:'.$URL);
   return;
  }




  
  public function update(DataRouter $router)
  {
    global $URL;

    $password = $router->post('password');
    $password = password_hash($password, PASSWORD_BCRYPT);

    $user = new User();
     $id = $_SESSION['id'];
    $user->update("UPDATE `user` SET `password`='$password' WHERE id = $id ");
   
    return json_encode("senha alterada");
  }




  public function logout()
  {
    global $URL;

    $_SESSION['logado'] = false;

    header('Location:'.$URL."login");
   
  }


}