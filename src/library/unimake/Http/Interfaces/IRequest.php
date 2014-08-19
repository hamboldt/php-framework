<?php

namespace Unimake\Http\Interfaces;

use Unimake\Http\Interfaces\IResponse;

/**
 * @brief   Interface da requisição
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IRequest {
   
   /**
    * @brief   Retorna a URL da requisição
    * @return  string URL da requisição
    */
   public function getUrl();
   
   /**
    * @brief   Define a URL da requisição
    * @param   string $url URL da requisição
    */
   public function setUrl($url);
   
   /**
    * @brief   Retorna o tipo da requisição
    * @return  int
    */
   public function getType();
   
   /**
    * @brief   Define o tipo da requisição
    * @param   int $type Tipo da requisição
    */
   public function setType($type);
}