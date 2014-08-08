<?php

namespace Unimake\ShoppingCart\Products;

use Unimake\ShoppingCart\Interfaces\IProduct;

/**
 * @brief   Abstração do produto do carrinho
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class AbstractProduct implements IProduct {
   
   protected $id;
   protected $name;
   protected $description;
   protected $unityPrice;
   protected $quantity;
   
   /**
    * @brief   Retorna a ID
    * @return  int Retorna a ID do produto
    */
   public function getID(){
      return $this->id;
   }
   
   /**
    * @brief   Define a ID do produto
    * @param   int $id ID do produto
    */
   public function setID($id){
      $this->id = (int)$id;
   }
   
   /**
    * @brief   Retorna o nome do produto
    * @return  string Nome do produto
    */
   public function getName(){
      return $this->name;
   }
   
   /**
    * @brief   Define o nome do produto
    * @param   string $name Nome do produto
    */
   public function setName($name){
      $this->name = (string)$name;
   }
   
   /**
    * @brief   Retorna a descrição do produto
    * @return  string Descrição
    */
   public function getDescription(){
      return $this->description;
   }
   
   /**
    * @brief   Define a descrição do produto
    * @param   string $string Descrição do produto
    */
   public function setDescription($description){
      $this->description = (string)$description;
   }
   
   /**
    * @brief   Retorna o preço unitário do produto
    * @return  float Preço unitário
    */
   public function getUnityPrice(){
      return $this->unityPrice;
   }
   
   /**
    * @brief   Define o preço unitário do produto
    * @param   type $unityPrice Preço unitário
    */
   public function setUnityPrice($unityPrice){
      $this->unityPrice = (float)$unityPrice;
   }
   
   /**
    * @brief   Retorna a quantidade
    * @return  int quantidade
    */
   public function getQuantity(){
      return $this->quantity;
   }
   
   /**
    * @brief   Define a quantidade do produto
    * @param   int $quantity Quantidade do produto
    */
   public function setQuantity($quantity){
      $this->quantity = (int)$quantity;
   }
   
   /**
    * @brief   Retorna o preço total do produto
    * @return  float Preço total
    */
   public function getTotalPrice(){
      return $this->getQuantity() * $this->getUnityPrice();
   }
}