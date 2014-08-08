<?php

namespace Unimake\ShoppingCart;

use Unimake\ShoppingCart\Interfaces\IShoppingCart;
use Unimake\ShoppingCart\Interfaces\IProduct;

/**
 * @brief   Abstração do carrinho de compras
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br
 */
abstract class AbstractShoppingCart implements IShoppingCart {
   
   /**
    * @brief   Array que armazenará os produtos
    * @var     array
    */
   protected $products = array();
   
   /**
    * @brief   Adiciona um produto ao carrinho
    * @param   \Unimake\ShoppingCart\Interfaces\IProduct $product Produto a ser adicionado
    */
   public function addProduct(IProduct $product){
      $this->products[$product->getID()] = $product;
   }
   
   /**
    * @brief   Remove um produto do carrinho de compras
    * @param   \Unimake\ShoppingCart\Interfaces\IProduct $product
    */
   public function delProduct(IProduct $product){
      unset($this->products[$product->getID()]);
   }
   
}