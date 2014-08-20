<?php

namespace Unimake\Http\Interfaces;

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
    * @return void
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
    * @return void
    */
   public function setType($type);
   
   /**
    * @brief   Define um parâmetro para a requisição
    * @param   string $name   Nome do parâmetro
    * @param   string $value  Valor do parâmetro
    * @return void
    */
   public function setParam($name, $value);
   
   /**
    * @brief   Retorna um parâmetro.
    * @param   string $name   Nome do parâmetro
    * @return  string
    */
   public function getParam($name);
   
   /**
    * @brief   Retorna todos os parâmetros da requisição
    * @return  string
    */
   public function getParameters();
}