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
    * @brief   Construtor da transação
    */
   public function __construct(){
      $this->response = new Response();
   }
   
   /**
    * @brief   Define a requisição do
    * @param   \Unimake\Http\Interfaces\IRequest $request Requisiçao
    */
   public function sendRequest(IRequest $request){
      
      $curlOptHttpGet = true;
      $curlOptPost = false;
      $curlGetParameters = '';
      
      if($request->getType() === RequestTypes::POST){
         $curlOptHttpGet = false;
         $curlOptPost = true;
      }
      else if($request->getType() === RequestTypes::GET){
         $curlGetParameters = http_build_query($request->getParameters());
      }
      
      $ch = curl_init();
      
      curl_setopt_array($ch, array(
         CURLOPT_URL            => $request->getUrl() . '?' . $curlGetParameters,
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_HTTPGET        => $curlOptHttpGet,
         CURLOPT_POST           => $curlOptPost,
         CURLOPT_POSTFIELDS     => $request->getParameters()
      ));
      
      $text = curl_exec($ch);
      
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