<?php

namespace Unimake\ShoppingCart;

/**
 * @brief   Carrinho de compras
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class ShoppingCart extends AbstractShoppingCart {
   
   /**
    * @brief   Conta o número de produtos no carrinho
    * @return  int quantidade de produtos no carrinho
    */
   public function count(){
      $count = 0;
      
      if(count($this->products) > 0)
         foreach($this->products as $product)
            $count += $product->getQuantity();
      
      return $count;
   }
   
}