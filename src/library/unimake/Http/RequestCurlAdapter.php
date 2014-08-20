<?php

namespace Unimake\Http;

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
   public function convertRequest(Interfaces\IRequest $request){
      $curlRequest = curl_init();
      curl_setopt_array($curlRequest, $this->adaptedOptions($request));
      
      return $curlRequest;
   }
   
   /**
    * @brief   Obtém as configurações de uma requisição cURL
    * @param   \Unimake\Http\Interfaces\IRequest $request
    * @return  array
    */
   private function adaptedOptions(Interfaces\IRequest $request){
      $curlOptions = array();
      $curlOptions[CURLOPT_RETURNTRANSFER] = true;
      $curlOptions[CURLOPT_URL] = $request->getUrl();
      
      switch ($request->getType()){   
         // Caso a requisição for do tipo GET
         // http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#GET
         case RequestTypes::GET :
            $curlOptions[CURLOPT_HTTPGET] = true;
            $curlOptions[CURLOPT_URL] = $request->getUrl() . '?' . http_build_query($request->getParameters());
            break;
         
         // Caso a requisição for do tipo POST
         // http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#POST
         case RequestTypes::POST :
            $curlOptions[CURLOPT_POST] = true;
            $curlOptions[CURLOPT_POSTFIELDS] = $request->getParameters();
            break;
      }
      
      return $curlOptions;
   }
}