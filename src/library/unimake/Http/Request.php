<?php

namespace Unimake\Http;

use Unimake\Http\Interfaces\IRequest;

/**
 * @brief   Requisição
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class Request implements IRequest {
   
   /**
    * @brief   URL aonde a requisição será feita
    * @var     string
    */
   private $url;
   
   /**
    * @brief   Tipo da requisição
    * @var     int
    */
   private $type;
   
   /**
    * @brief   Resposta do servidor
    * @var     \Unimake\Http\Response
    */
   private $response;
   
   /**
    * @brief   Retorna a URL da requisição
    * @return  string URL da requisição
    */
   public function getUrl(){
      return $this->url;
   }
   
   /**
    * @brief   Define a URL da requisição
    * @param   string $url URL da requisição
    */
   public function setUrl($url){
      $this->url = $url;
   }
   
   /**
    * @brief   Retorna o tipo da requisição
    * @return  int
    */
   public function getType(){
      return $this->type;
   }
   
   /**
    * @brief   Define o tipo da requisição
    * @param   int $type Tipo da requisição
    */
   public function setType($type){
      $this->type = $type;
   }
}