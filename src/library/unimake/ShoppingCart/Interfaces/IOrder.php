<?php

namespace Unimake\ShoppingCart\Interfaces;

/**
 * @brief   Interface da venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IOrder extends IShoppingCart {
   
   /**
    * @brief   Adiciona um desconto à venda.
    * @param   \Unimake\ShoppingCart\Interfaces\IDiscount $discount
    * @return  void
    */
   public function addDiscount(IDiscount $discount);
   
   /**
    * @brief   Remove um disconto da lista de descontos.
    * @param   \Unimake\ShoppingCart\Interfaces\IDiscount $discount
    * @return  void
    */
   public function delDiscount(IDiscount $discount);
   
   /**
    * @brief   Executa o melhor desconto da lista de desconto
    * @return  void
    */
   public function applyGreaterDiscount();
   
   /**
    * @brief   Aplica desconto sobre desconto utilizando os descontos
    * adicionados na lista de descontos da venda.
    * @return  void
    */
   public function applyDiscountOverDiscount();
   
   /**
    * @brief   Retorna o valor total dos descontos aplicados
    * @return  float
    */
   public function getTotalDiscountedValue();
   
   /**
    * @brief   Retorna o valor total dos produtos sem desconto
    * @return  float
    */
   public function getTotalProductsValue();
   
   /**
    * @brief   Retorna o valor total da venda [produtos+desconto]
    * @return  floar
    */
   public function getTotalOrderValue();
   
}