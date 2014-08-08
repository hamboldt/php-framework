<?php

namespace Unimake\ShoppingCart\DiscountStrategies;

use Unimake\ShoppingCart\Interfaces\IDiscountStrategy;

/**
 * @brief   Interface da estratégia de desconto
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class AbstractDiscountStrategy implements IDiscountStrategy {
   
   protected $discountValue;
   protected $discountPercentual;

   /**
    * @brief   Retorna um valor descontado da compra
    * @return  float Valor a ser descontado
    */
   public function getDiscountValue(){
      return $this->discountValue;
   }
   
   /**
    * @brief   Define o valor a ser descontado da compra
    * @param   float $discountValue Valor a ser descontado
    */
   public function setDiscountValue($discountValue){
      $this->discountValue = (float)$discountValue;
   }
   
   /**
    * @brief   Retorna um percentual de desconto
    * @return  float Percentual de desconto   
    */
   public function getDiscountPercentual(){
      return $this->discountPercentual;
   }
   
   /**
    * @brief   Define um percentual de desconto
    * @param   float $discountPercentual Percentual de desconto
    */
   public function setDiscountPercentual($discountPercentual){
      $this->discountPercentual = (float)$discountPercentual;
   }
   
}