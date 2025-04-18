<?php

namespace App\Controller;

use App\Entity\ErrorText;
use Error;

class ControllerError{


     public function index()
     {
        $error = new ErrorText;

        return json_encode($error->select());
     }


     public function delete()
     {

        $error = new ErrorText;
        $error->delete();

       return json_encode("true");
     }




}