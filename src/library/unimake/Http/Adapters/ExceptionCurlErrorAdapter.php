<?php

namespace Unimake\Http\Adapters;

use Unimake\Http\Exceptions\UnsuportedProtocolException;
use Unimake\Http\Exceptions\IncorrectUrlFormatException;
use Unimake\Http\Exceptions\ConnectionTimedOutException;

/**
 * @brief   Converte os erros do cURL para exeções
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class ExceptionCurlErrorAdaper {
   
   /**
    * @brief   Converte um erro do cURL para exception
    * @param   resource $curlResource Resource de conexão
    * @throws  Exception
    */
   public static function throwCurlException($curlResource){
      switch(curl_errno($curlResource)){
         case 01: throw new UnsuportedProtocolException(); break;
         case 03: throw new IncorrectUrlFormatException(); break;
         case 28: throw new ConnectionTimedOutException(); break;
         default: throw new \Exception(curl_error($curlResource));
      }
   }
   
}