<?php

namespace App\Database;

use PDO;
use PDOException;

 class Conection{

   public static function conn(){

    $dbHost = 'localhost';
    $dbName = 'db_gerador';
    $dbUser = 'root';
    $dbPass = '';
        
        try {
        
          // Criação da conexão PDO
          $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
          
          // Configuração de opções adicionais
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            return $pdo;
          // Operações no banco de dados...
        
        
          
        } catch (PDOException $e) {
          // Tratamento de erros
          return 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
      
   }



}




// Configurações do banco de dados

?>
