<?php



namespace App\Controller;

use App\Entity\ErrorText;
use App\Entity\MakeText;
use App\Entity\Options;
use App\Router\DataRouter;
use DateTime;
use OpenAI;

class Chatgpt
{

   private $options;

   public function __construct()
   {
      $this->options = new Options();
   }




   public function index(DataRouter $dataRouter)
   {

    

      header('Content-Type: application/json');
      header('Content-Type: application/json; charset=utf-8');

      $data = $this->textGenerate($_POST['info']);


      return json_encode($data);
   }


   public function textGenerate(string $data)
   {
      //$data =  explode(",", $data);
      $data = str_getcsv($data);

     
      $idKeyword = $data[0] ?? null;
      $keyword = $data[1] ?? null;
      $company = $data[2] ?? null;
      $content = $data[3] ?? null;
      $custom01 = $data[4] ?? null;
      $custom02 = $data[5] ?? null;
      $custom03 = $data[6] ?? null;
      $segment = $data[7] ?? null;
      $system = $data[8]?? null;
      $customPrompt = $data[9]?? null;


      if ($idKeyword == "ID da palavra") {

         return  [$idKeyword, $keyword, $company,$segment, $content];
      }
      if (is_null($keyword) || $keyword == "") {

         return  [$idKeyword, $keyword, $company,$segment, $content];
      }
       $dataChat = ["company"=>$company,"keyword"=>$keyword,"segment"=>$segment,"custom01"=>$custom01,"custom02"=>$custom02,"custom03"=>$custom03];

      $text = $this->apiChatgpt($system,$customPrompt,$dataChat);

      $content = $text;

      date_default_timezone_set('America/Sao_Paulo');
      $verificationData = new DateTime();
      $date =  $verificationData->format('d-m-Y H:i:s');
      $makeText = new MakeText();
      $data = [$idKeyword, $keyword, $company,$segment, $content];


      $makeText->insert($idKeyword, $keyword, $content, $company, "", $date);

      return $data;
   }



   public function apiChatgpt($customSystem,$customPrompt,$data)
   {

      $dataPrompt = $this->options->option('prompt');
      $dataPrompt =  str_replace('[company]', $data['company'], $dataPrompt);
      $dataPrompt =  str_replace('[segment]', $data['segment'], $dataPrompt);
      $dataPrompt =  str_replace('[keyword]',  $data['keyword'], $dataPrompt);
      $dataPrompt =  str_replace('[custom01]',  $data['custom01'], $dataPrompt);
      $dataPrompt =  str_replace('[custom02]',  $data['custom02'], $dataPrompt);
      $dataPrompt =  str_replace('[custom03]',  $data['custom03'], $dataPrompt);

      $dataSystem = $this->options->option('system');
      $dataSystem =  str_replace('[company]', $data['company'], $dataSystem);
      $dataSystem =  str_replace('[segment]', $data['segment'], $dataSystem);
      $dataSystem =  str_replace('[keyword]',  $data['keyword'], $dataSystem);
      $dataSystem =  str_replace('[custom01]',  $data['custom01'], $dataSystem);
      $dataSystem =  str_replace('[custom02]',  $data['custom02'], $dataSystem);
      $dataSystem =  str_replace('[custom03]',  $data['custom03'], $dataSystem);

      
      $prompt =  $customPrompt !== ""? $customPrompt : $dataPrompt;
      $system =  $customSystem  !== "" ? $customSystem : $dataSystem;


      $client = OpenAI::client($this->options->option('key'));

      $result = $client->chat()->create([
          //'model' => 'gpt-3.5-turbo',
          'model' => 'ft:gpt-3.5-turbo-0125:personal:informativo:9NM3iMt2:ckpt-step-250',
         // 'model' => 'ft:gpt-3.5-turbo-0125:personal:informativo:9NM3iMt2',
          'temperature' => 0.8,
          'max_tokens' => intval($this->options->option('token')),
          'messages' => [

              ['role' => 'system', 'content' => $system],
              
              ['role'=>'user', 'content'=>$prompt]
  
          ],
  
      ]);

 
      return $result->choices[0]->message->content;

   }
}
