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
      if(!isset($this->products[$product->getID()]))
         $this->products[$product->getID()] = $product;
      else {
         $quantityNow = $this->products[$product->getID()]->getQuantity();
         $newQuantity = $quantityNow + $product->getQuantity();
         $this->products[$product->getID()]->setQuantity($newQuantity);
      }
   }
   
   /**
    * @brief   Remove um produto do carrinho de compras
    * @param   \Unimake\ShoppingCart\Interfaces\IProduct $product
    */
   public function delProduct(IProduct $product){
      unset($this->products[$product->getID()]);
   }
   
   /**
    * @brief   Retorna todos os produtos do carrinho
    * @return  array
    */
   public function getAllProducts(){
      return $this->products;
   }
   
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