<?php

namespace Unimake\Http\Adapters;

use Unimake\Http\Interfaces\IRequest;
use Unimake\Http\RequestTypes;

/**
 * @brief   Responsável por converter uma requisição
 * para o padrão de requisições do cURL.
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class RequestCurlAdapter {
   
   /**
    * @brief   Converte uma requisição
    * @return  resource a cURL handle on success, <b>FALSE</b> on errors.
    */
   public function convertRequest(IRequest $request){
      $curlRequest = curl_init();
      curl_setopt_array($curlRequest, $this->adaptedOptions($request));
      
      return $curlRequest;
   }
   
   /**
    * @brief   Obtém as configurações de uma requisição cURL
    * @param   \Unimake\Http\Interfaces\IRequest $request
    * @return  array
    */
   private function adaptedOptions(IRequest $request){
      $curlOptions = array(
         CURLOPT_URL                => $request->getUrl(),
         CURLOPT_RETURNTRANSFER     => true,
         CURLOPT_CONNECTTIMEOUT_MS  => 1000,
         CURLOPT_TIMEOUT_MS         => 1000,
      );
      
      switch ($request->getType()){   
         case RequestTypes::GET :
            $curlOptions[CURLOPT_HTTPGET] = true;
            $curlOptions[CURLOPT_URL] = $request->getUrl() . '?' . http_build_query($request->getParameters());
            break;
         
         case RequestTypes::POST :
            $curlOptions[CURLOPT_POST] = true;
            $curlOptions[CURLOPT_POSTFIELDS] = $request->getParameters();
            break;
      }
      
      return $curlOptions;
   }
}