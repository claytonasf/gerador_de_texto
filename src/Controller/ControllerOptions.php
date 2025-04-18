<?php 

namespace App\Controller;

use App\Entity\Options;
use App\Router\DataRouter;

class ControllerOptions{



  public function store()
  {
    global $URL;
    $key = $_POST['key']?? null;
    $token = $_POST['token']?? null;
    $prompt = $_POST['prompt']?? null;
    $system = $_POST['system']?? null;

    $option = new Options();
    $option->optionsInsert("key", $key);
    $option->optionsInsert("token",$token);
    $option->optionsInsert("prompt",$prompt);
    $option->optionsInsert("system",$system);

    return header('Location:'.$URL);
  }



}