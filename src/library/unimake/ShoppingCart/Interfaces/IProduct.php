<?php

namespace Unimake\ShoppingCart\Interfaces;

/**
 * @brief   Interface dos produtos
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IProduct {
   
   /**
    * @brief   Retorna a ID
    * @return  int Retorna a ID do produto
    */
   public function getID();
   
   /**
    * @brief   Define a ID do produto
    * @param   int $id ID do produto
    * @return  void
    */
   public function setID($id);
   
   /**
    * @brief   Retorna o nome do produto
    * @return  string Nome do produto
    */
   public function getName();
   
   /**
    * @brief   Define o nome do produto
    * @param   string $name Nome do produto
    * @return  void
    */
   public function setName($name);
   
   /**
    * @brief   Retorna a descrição do produto
    * @return  string Descrição
    */
   public function getDescription();
   
   /**
    * @brief   Define a descrição do produto
    * @param   string $description Descrição do produto
    * @return  void
    */
   public function setDescription($description);
   
   /**
    * @brief   Retorna o preço unitário do produto
    * @return  float Preço unitário
    */
   public function getUnityPrice();
   
   /**
    * @brief   Define o preço unitário do produto
    * @param   type $unityPrice Preço unitário
    * @return  void
    */
   public function setUnityPrice($unityPrice);
   
   /**
    * @brief   Retorna a quantidade
    * @return  int quantidade
    */
   public function getQuantity();
   
   /**
    * @brief   Define a quantidade do produto
    * @param   int $quantity Quantidade do produto
    * @return  void
    */
   public function setQuantity($quantity);
   
   /**
    * @brief   Retorna o preço total do produto
    * @return  float Preço total
    */
   public function getTotalPrice();
}