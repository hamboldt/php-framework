<?php

namespace Unimake\ShoppingCart;

use Unimake\ShoppingCart\AbstractShoppingCart;

/**
 * @brief   Venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class Order extends AbstractShoppingCart implements Interfaces\IOrder {
   
   protected $totalDiscount;
   
   /**
    * @brief   Define o valor do desconto total da compra
    * @param   float $discount Valor total do desconto
    */
   public function setTotalDiscount($discount){
      $this->totalDiscount = (float)$discount;
   }
   
   /**
    * @brief   Retorna o valor total do desconto
    * @return  float Valor total de desconto
    */
   public function getTotalDiscount(){
      return $this->totalDiscount;
   }
   
   /**
    * @brief   Retorna o preço total da venda com descontos
    * @return  float Prçeo total da venda com descontos
    */
   public function getTotalPrice(){
      $totalPrice = 0;
      
      foreach($this->getAll() as $product){
         var_dump($product);
         $totalPrice += $product->getTotalPrice();
      }
      
      return $totalPrice - $this->getTotalDiscount();
   }
   
}