<?php

namespace Unimake\Http;

/**
 * @brief   Resposta originada da requisição
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class Response implements \Unimake\Http\Interfaces\IResponse {
   
   /**
    * @brief   Texto da resposta do servidor
    * @var     string
    */
   private $text;
   
   /**
    * @brief   Retorna o texto de resposta
    * @return  string
    */
   public function getText(){
     return $this->text;
   }
   
   /**
    * @brief   Define o texto de resposta.
    * @param   string $text Texto de resposta
    */
   public function setText($text){
      $this->text = $text;
   }
}