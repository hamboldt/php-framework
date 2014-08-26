<?php

namespace Unimake\ShoppingCart\Discounts;

use Unimake\ShoppingCart\Interfaces\IDiscount;

/**
 * @brief   Abstração do desconto
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class AbstractDiscount implements IDiscount {
   
   public $id;
   public $discountValue;
   public $discountPercentual;
   
   /**
    * @brief   Retorna o desconto
    * @return  int
    */
   public function getID(){
      return $this->id;
   }
   
   /**
    * @brief   Define a id do desconto
    * @param   float $id id do desconto
    */
   public function setID($id){
      $this->id = $id;
   }
   
   /**
    * @brief   Retorna o valor do desconto
    * @return  float
    */
   public function getDiscountValue(){
      return $this->discountValue;
   }
   
   /**
    * @brief   Define o valor do desconto
    * @param   float $discountValue Valor do desconto
    */
   public function setDiscountValue($discountValue){
      $this->discountValue = $discountValue;
   }
   
   /**
    * @brief   Retorna o percentual de desconto
    * @return  float
    */
   public function getDiscountPercentual(){
      return $this->discountPercentual;
   }
   
   /**
    * @brief   Define o percentual de desconto
    * @param   float $discountPercentual Percentual de desconto
    */
   public function setDiscountPercentual($discountPercentual){
      $this->discountPercentual;
   }
   
}