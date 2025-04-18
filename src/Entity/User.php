<?php

namespace App\Entity;

use App\Database\Conection;
use PDO;

class User{
   
   private $pdo;

     public function __construct()
     {
        $this->pdo = Conection::conn();
     }


    public function insert($query)
    {

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
  
       return ;


    }


    public function select()
    {
        $query = "SELECT *  FROM user;";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    public function selectWhere($query)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    public function update($query)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

      return;
    }


    public function delete($data)
    {
        $query = "DELETE FROM `user` WHERE email ='$data'";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return ;


    }


}