<?php

namespace App\Router;


class  DataRouter{
 
  private $query;
  private $post;


  public function __construct(string $method, array $data)
  {
       
      switch($method){
         case "GET":
               $this->query = $data;
           break;

           case "POST":
            $this->post = $data;
              break;

      }

  }


  public function post(string $post){

    return  is_null($post)? $this->post : $this->post[$post] ;
  }

 
  public function get($query)
  {

    return is_null($query)? $this->query : $this->query[$query];
  }







}