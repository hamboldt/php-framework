<?php

namespace Unimake\Http\Interfaces;

/**
 * @brief   Interface da resposta
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IResponse {
   
   /**
    * @brief   Retorna o texto de resposta
    * @return  string
    */
   public function getText();
   
   /**
    * @brief   Define o texto de resposta.
    * @param   string $text Texto de resposta
    * @return void
    */
   public function setText($text);
}