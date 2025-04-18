<?php

   namespace App\Entity;

use App\Database\Conection;
use PDO;
use PDOException;

   class Options{

    private $pdo;

    public function __construct()
    {
         $this->pdo = Conection::conn();
        
    }

     public function optionsInsert( string $option,string $value)
     {
           $query = "UPDATE `options` SET `values` = '$value' WHERE `option` = '$option';";       
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
     }


     public function option( string $option)
     {
  


         $query = "SELECT * FROM options WHERE `option`= '$option' ";       
         $stmt = $this->pdo->prepare($query);
         $stmt->execute();
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $results[0]['values'];

          
     }



   }