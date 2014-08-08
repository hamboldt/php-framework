<?php

namespace Unimake\ShoppingCart\Interfaces;

use Unimake\ShoppingCart\Interfaces\IProduct;

/**
 * @brief   Interface do carrinho de compras
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IShoppingCart {
   
   /**
    * @brief   Adiciona um produto ao carrinho
    * @param   IProduct $product Produto a ser adicionado
    */
   public function addProduct(IProduct $product);
   
   /**
    * @brief   Remove um produto do carrinho
    * @param   IProduct $product Produto a ser removido
    */
   public function delProduct(IProduct $product);
   
}