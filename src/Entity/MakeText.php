<?php

namespace App\Entity;
use App\Database\Conection;
use DateTime;
use PDO;

class MakeText{

  private $IDKeyword;
  private $keyword;
  private $prompt;
  private $content;
  private $typePage;
  private $pdo;


  public function __construct()
  {
     $this->pdo = Conection::conn();
  }


    public function setIDKeyword(string $IDKeyword):self
    {
        $this->IDKeyword = $IDKeyword;

        return $this;
        
    }

    public function getIDKeyword():string
    {
        return $this->IDKeyword;
        
    }

    
    public function setKeyword(string $keyword):self
    {
        $this->keyword = $keyword;

        return $this;
        
    }


    public function getKeyword():string
    {

        return  $this->keyword ;
        
    }

    

    public function setPrompt(string $prompt):self
    {
        $this->prompt = $prompt;

        return $this;
        
    }


    public function getPrompt():string
    {
        return  $this->prompt ;
        
    }


    public function setContent(string $content):self
    {
        $this->content = $content;

        return $this;
        
    }


    public function getContent():string
    {
        return $this->content;
        
    }

    public function setTypePage(string $typePage):self
    {
        $this->typePage = $typePage;

        return $this;
        
    }

    public function getTypePage()
    {
        return $this->typePage;
        
    }


   public function select($query){

    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   }



   public function insert($IDkeyword,$keyword,$content,$company,$page,$date)
   {
     $query = 'INSERT INTO main  ( `id_project`, `keyword`, `text`, `company`, `page`, `dateInsert`) VALUES(:id_project,:keyword,:content,:company,:typePage,:dateInsert);';

      $stmt = $this->pdo->prepare($query);

      $stmt->bindParam(':id_project',$IDkeyword);
      $stmt->bindParam(':keyword',$keyword);
      $stmt->bindParam(':content',$content);
      $stmt->bindParam(':company',$company);
      $stmt->bindParam(':typePage',$page);
      $stmt->bindParam(':dateInsert',$date);
      $stmt->execute();

     return ;

   }



   public function between(string $start,string $end)
   {
     $start = str_replace("/","-",$start);
     $end = str_replace("/","-",$end);
  // return $query = "SELECT *  FROM main  WHERE dateInsert BETWEEN '$start' AND '$end';";
     $date = DateTime::createFromFormat('d-m-Y', $start);
     $start = $date->format('Y-m-d');

     $date = DateTime::createFromFormat('d-m-Y', $end);
     $end = $date->format('Y-m-d');
     
    $query = "SELECT * FROM `main` WHERE STR_TO_DATE(dateInsert, '%d-%m-%Y %H:%i:%s') BETWEEN '$start 00:00:00' AND '$end 23:59:59';";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   }




   public function where($start){
    $start = str_replace("/","-",$start);
     $query = "SELECT * FROM `main` WHERE dateInsert LIKE '$start%';";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute();
    return $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

   }




}