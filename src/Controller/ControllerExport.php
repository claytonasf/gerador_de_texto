<?php


namespace App\Controller;

use App\Entity\MakeText;
use App\Router\DataRouter;
use DateTime;

class ControllerExport{


 public function export(DataRouter $dataRouter)
 {

   $export = new MakeText();


    $start = date('d/m/Y', strtotime($dataRouter->post('start')));
    $end = date('d/m/Y', strtotime($dataRouter->post('end')));

    $results =  $export->between($start,$end);

    if(is_null($dataRouter->post('end'))){
       $results =  $export->where($start);

    }


  

     unlink('export.csv');
    $file = fopen('export.csv', 'w');

   
    foreach ($results as $row) {
       
        fputcsv($file,$row);
    }
    

      fclose($file);


      header('Cache-Control: no-store');
      header("Content-Disposition: attachment; filename= export.csv");
      header('Content-Type: application/octet-stream'); 

      ob_clean();
      
      readfile("export.csv");

 }


 public function downloadBase()
 {

  header('Cache-Control: no-store');
  header("Content-Disposition: attachment; filename= planilha-base.csv");
  header('Content-Type: application/octet-stream');

  ob_clean();
  
  readfile("planilha-base.csv");

 }



}