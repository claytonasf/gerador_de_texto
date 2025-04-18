<?php

namespace App\Controller;

use App\Entity\Options;
use App\Entity\User;

  class ControllerViews{

 
    public function home()
    {
     global $URL_BASE;
     global $URL;



     $option = new Options();

     $token = $option->option('token');
     $key = $option->option('key');
     $prompt = $option->option('prompt');
     $system = $option->option('system');

      $user = new User();
      $users = $user->select();


     
 
    return include __DIR__. "/../../template/home.php";
    }





  }