<?php

namespace Unimake\ShoppingCart\Adapters;

use Unimake\ShoppingCart\Interfaces\IShoppingCart;

/**
 * @brief   Adapta um ShoppingCart como uma venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class OrderAdapter {
   
   /**
    * @brief   Adapta um ShoppingCart para uma Order
    * @param   \Unimake\ShoppingCart\Interfaces\IShoppingCart $shoppingCart
    * @return  \Unimake\ShoppingCart\Interfaces\IOrder
    */
   public static function adaptShoppingCart(IShoppingCart $shoppingCart){
      $order = new \Unimake\ShoppingCart\Order();
      
      if($shoppingCart->count() > 0)
         foreach($shoppingCart->getAllProducts() as $product)
            $order->addProduct($product);
      
      return $order;
   }
}