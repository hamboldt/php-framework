<?php

namespace Unimake\Http;

use Unimake\Http\Interfaces\IRequest;
use Unimake\Http\Interfaces\IResponse;
use Unimake\Http\Interfaces\ITransaction;

/**
 * @brief   Transação Http
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class Transaction implements ITransaction {
   
   /**
    * @brief   Reposta do servidor
    * @var     \Unimake\Http\Interfaces\IResponse
    */
   private $response;
   
   /**
    * @brief   Define a requisição do
    * @param   \Unimake\Http\Interfaces\IRequest $request Requisiçao
    */
   public function sendRequest(IRequest $request){
      
      $httpGet = false;
      
      if($request->getType() === RequestTypes::GET)
         $httpGet = true;
      
      $ch = curl_init();
      
      curl_setopt_array($ch, array(
         CURLOPT_URL            => $request->getUrl(),
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_HTTPGET        => $httpGet,
      ));
      
      $text = curl_exec($ch);
      
      $this->response = new Response();
      $this->response->setText($text);
   }
   
   /**
    * @brief   Retorna a resposta da requisição
    * @return  \Unimake\Http\Interfaces\IResponse
    */
   public function getResponse(){
      return $this->response;
   }
}