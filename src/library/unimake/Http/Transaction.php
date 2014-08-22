<?php

namespace Unimake\Http;

use Unimake\Http\Interfaces\IRequest;
use Unimake\Http\Interfaces\IResponse;
use Unimake\Http\Interfaces\ITransaction;
use Unimake\Http\Adapters\RequestCurlAdapter;
use Unimake\Http\Adapters\ExceptionCurlErrorAdaper;

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
      $adapter = new RequestCurlAdapter();
      
      $curlRequest = $adapter->convertRequest($request);
      $curlResponse = curl_exec($curlRequest);
      
      if(curl_errno($curlRequest) !== 0)
         ExceptionCurlErrorAdaper::throwCurlException($curlRequest);
      
      $this->response = new Response();
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