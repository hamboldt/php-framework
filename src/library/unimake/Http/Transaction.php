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
      
      $curlOptions = array();
      
      switch ($request->getType()){   
         // Caso a requisição for do tipo GET
         // http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#GET
         case RequestTypes::GET :   
            $curlOptions = array(
               CURLOPT_URL            => $request->getUrl() . '?' . http_build_query($request->getParameters()),
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_HTTPGET        => true,
            );
            break;
         
         // Caso a requisição for do tipo POST
         // http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#POST
         case RequestTypes::POST :
            $curlOptions = array(
               CURLOPT_URL            => $request->getUrl(),
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_POST           => $curlOptPost,
               CURLOPT_POSTFIELDS     => $request->getParameters()
            );
            break;
      }
      
      $curlRequest = curl_init();
      curl_setopt_array($curlRequest, $curlOptions);
      $curlResponse = curl_exec($curlRequest);
      
      $this->response->setText($curlResponse);
   }
   
   /**
    * @brief   Retorna a resposta da requisição
    * @return  \Unimake\Http\Interfaces\IResponse
    */
   public function getResponse(){
      return $this->response;
   }
}