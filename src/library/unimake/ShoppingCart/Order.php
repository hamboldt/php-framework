<?php

namespace Unimake\ShoppingCart;

use Unimake\ShoppingCart\AbstractShoppingCart;

/**
 * @brief   Classe de venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class Order extends AbstractShoppingCart implements Interfaces\IOrder {
   
   /**
    * @brief   Coleção de descontos
    * @var     \Unimake\ShoppingCart\Collections\DiscountCollection
    */
   protected $discountCollection;
   
   /**
    * @brief   Constroi o objeto venda.
    */
   public function __construct() {
      $this->discountCollection = new Collections\DiscountCollection();
   }
   
   /**
    * @brief   Adiciona um desconto à venda.
    * @param   \Unimake\ShoppingCart\Interfaces\IDiscount $discount
    * @return  void
    */
   public function addDiscount(Interfaces\IDiscount $discount) {
      $this->discountCollection->add($discount->getID(), $discount);
   }
   
   /**
    * @brief   Remove um disconto da lista de descontos.
    * @param   \Unimake\ShoppingCart\Interfaces\IDiscount $discount
    * @return  void
    */
   public function delDiscount(Interfaces\IDiscount $discount) {
      $this->discountCollection->remove($discount->getID());
   }
   
   /**
    * @brief   Retorna o valor total descontado
    * @return  float Valor total descontado
    */
   public function getTotalDiscountedValue() {
      $total = 0.00;
      
      if(!$this->discountCollection->isEmpty())
         foreach($this->discountCollection->getAll() as $discount)
            $total += $discount->getDiscountValue();
            
      return $total;
   }
   
   /**
    * @brief   Retorna o valor total dos produtos sem desconto
    * @return  float
    */
   public function getTotalProductsValue(){
      $total = 0.0;
      
      if($this->count() > 0)
         foreach($this->getAll() as $product)
            $total += $product->getTotalPrice();
      
      return $total;
   }
   
   /**
    * @brief   Retorna o valor total da venda [produtos+desconto]
    * @return  float
    */
   public function getTotalOrderValue(){
      return $this->getTotalProductsValue() - $this->getTotalDiscountedValue();
   }
}