<?php

namespace Unimake\Analysys\Network;

use Unimake\Http\Transaction;
use Unimake\Http\Request;
use Unimake\Http\Response;
use Unimake\Http\RequestTypes;
use Unimake\Http\Exceptions\ConnectionTimedOutException;

/**
 * @brief   Responsável por executar analises em servidores
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class WebsiteAnalysis {
   
   /**
    * @brief   Verifica se um servidor está disponível
    * @param   string $dns
    * @return  boold
    */
   public static function available($url){
      
      try {
         
         $httpRequest = new Request();
         $httpRequest->setUrl($url);
         $httpRequest->setType(RequestTypes::GET);

         $httpTransaction = new Transaction();
         $httpTransaction->sendRequest($httpRequest);
         
         return true;
      }
      catch(ConnectionTimedOutException $e){
         return false;
      }
   }
   
}