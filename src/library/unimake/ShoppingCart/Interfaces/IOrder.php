<?php

namespace Unimake\ShoppingCart\Interfaces;

/**
 * @brief   Interface da venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IOrder extends IShoppingCart {   
   
   /**
    * @brief   Define o valor do desconto total da compra
    * @param   float $discount Valor total do desconto
    */
   public function setTotalDiscount($discount);
   
   /**
    * @brief   Retorna o valor total do desconto
    * @return  float Valor total de desconto
    */
   public function getTotalDiscount();
   
   /**
    * @brief   Retorna o preço total da venda com descontos
    * @return  float Prçeo total da venda com descontos
    */
   public function getTotalPrice();
   
}