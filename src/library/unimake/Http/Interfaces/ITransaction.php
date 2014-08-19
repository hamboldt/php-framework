<?php

namespace Unimake\Http\Interfaces;

/**
 * @brief   Interface da transação HTTP
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface ITransaction {
   
   /**
    * @brief   Define a requisição do
    * @param   \Unimake\Http\Interfaces\IRequest $request Requisiçao
    */
   public function sendRequest(\Unimake\Http\Interfaces\IRequest $request);
   
   /**
    * @brief   Retorna a resposta da requisição
    * @return  \Unimake\Http\Interfaces\IResponse
    */
   public function getResponse();
}