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
   
   /**
    * @brief   Retorna todos os produtos do carrinho
    * @return  array
    */
   public function getAllProducts();
   
   /**
    * @brief   Conta o número de produtos no carrinho
    * @return  int quantidade de produtos no carrinho
    */
   public function count();
   
}