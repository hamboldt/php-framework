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
    * @brief   Valor total dos descontos aplicados na venda.
    * @var     float
    */
   protected $discountedValute;
   
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
    * @brief   Executa o melhor desconto da lista de desconto
    * @return  void
    */
   public function applyGreaterDiscount(){
      
   }
   
   /**
    * @brief   Aplica desconto sobre desconto utilizando os descontos
    * adicionados na lista de descontos da venda.
    * @return  void
    */
   public function applyDiscountOverDiscount(){
      
   }
   
   /**
    * @brief   Retorna o valor total dos descontos aplicados
    * @return  float
    */
   public function getTotalDiscountedValue(){
   }
   
   /**
    * @brief   Retorna o valor total dos produtos sem desconto
    * @return  float
    */
   public function getTotalProductsValue(){
   }
   
   /**
    * @brief   Retorna o valor total da venda [produtos+desconto]
    * @return  floar
    */
   public function getTotalOrderValue(){
   }
}