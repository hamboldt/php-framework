<?php

namespace Unimake\ShoppingCart\Products;

use Unimake\ShoppingCart\Products\Product;

/**
 * @brief   Product Factory
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class ProductFactory {
   
   /**
    * @brief   Cria um produto
    * @param   int $id ID do produto
    * @param   string $name Nome
    * @param   string $description Descrição
    * @param   int $quantity Quantidade
    * @param   float $unityPrice Preço unitário
    * @return  \Unimake\ShoppingCart\Products\Product
    */
   public static function createProduct($id, $name, $description, $quantity, $unityPrice){
      $product = new Product();
      $product->setID((int)$id);
      $product->setName((string)$name);
      $product->setDescription((string)$description);
      $product->setQuantity((int)$quantity);
      $product->setUnityPrice((float)$unityPrice);
      
      return $product;
   }
   
}