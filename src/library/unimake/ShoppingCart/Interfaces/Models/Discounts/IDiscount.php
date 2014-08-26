<?php

namespace Unimake\ShoppingCart\Interfaces;

/**
 * @brief   Interface de desconto
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IDiscount {
   
   /**
    * @brief   Retorna a ID do desconto
    * @return  int
    */
   public function getID();
   
   /**
    * @brief   Define a ID do desconto
    * @param   int $id
    * @return void
    */
   public function setID($id);
   
   /**
    * @brief   Retorna o valor de desconto
    * @return  void
    */
   public function getDiscountValue();
   
   /**
    * @brief   Define o valor do desconto
    * @param   float $discountValue
    * @return  void
    */
   public function setDiscountValue($discountValue);
   
   /**
    * @brief   Retorna o percentual de desconto
    * @return  float Percentual de desconto
    */
   public function getDiscountPercentual();
   
   /**
    * @brief   Define o percentual de desconto
    * @param   float $discountPercentual Percentual de desconto
    * @return  void
    */
   public function setDiscountPercentual($discountPercentual);
}