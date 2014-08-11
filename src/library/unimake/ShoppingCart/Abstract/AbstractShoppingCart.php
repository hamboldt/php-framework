<?php

namespace Unimake\ShoppingCart;

use Unimake\ShoppingCart\Interfaces\IShoppingCart;
use Unimake\ShoppingCart\Interfaces\IProduct;
use Unimake\Collections\Collection;

/**
 * @brief   Abstração do carrinho de compras
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br
 */
abstract class AbstractShoppingCart extends Collection implements IShoppingCart {
   
   /**
    * @brief   Adiciona uma produto ao carrinho
    * @param   int $key Chave do produto
    * @param   \Unimake\ShoppingCart\Products\Product $item Produto
    * @return  void
    */
   public function addProduct(IProduct $item) {
      if($this->containsKey($item->getID())){
         $this->increseProduct($item);
      } else {
         $this->add($item->getID(), $item);
      }
   }
   
   /**
    * @brief   Remove um produto do carrinho
    * @param   \Unimake\ShoppingCart\Interfaces\IProduct $item
    * @return  void
    */
   public function delProduct(IProduct $item){
      $this->remove($item->getID());
   }
   
   /**
    * @brief   Soma um produto à outro no carrinho
    * @param   \Unimake\ShoppingCart\Interfaces\IProduct $product
    * @return  void
    */
   protected function increseProduct(IProduct $product){
      if($this->containsKey($item->getID())){
         $quantity = $this->get($product->getID())->getQuantity();
         $quantity += $product->getQuantity();
         $product->setQuantity($quantity);
         $this->update($product->getID(), $product);
      }
   }
   
   public function count(){
      $count = 0;
      
      if(parent::count() > 0)
         foreach($this->getAll() as $product)
            $count += $product->getQuantity();
      
      return $count;
   }
}