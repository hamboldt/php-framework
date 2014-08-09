<?php

namespace Unimake\ShoppingCart\Interfaces;

/**
 * @brief   Interface da estratégia de desconto
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IDiscountStrategy {
   
   /**
    * @brief   Retorna um valor descontado da compra
    * @return  float Valor a ser descontado
    */
   public function getDiscountValue();
   
   /**
    * @brief   Define o valor a ser descontado da compra
    * @param   float $discountValue Valor a ser descontado
    * @return  void
    */
   public function setDiscountValue($discountValue);
   
   /**
    * @brief   Retorna um percentual de desconto
    * @return  float Percentual de desconto   
    */
   public function getDiscountPercentual();
   
   /**
    * @brief   Define um percentual de desconto
    * @param   float $discountPercentual Percentual de desconto
    * @return  void
    */
   public function setDiscountPercentual($discountPercentual);
   
}