<?php

namespace Unimake\Collections;

use Unimake\Collections\Interfaces\ICollection;

/**
 * @brief   Abstração para coleções
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
abstract class AbstractCollection implements ICollection {
   
   protected $index = array();
   
   /**
    * @brief   Adiciona um item na coleção
    * @param   int $key Chave de índice
    */
   public function add($key, $item){
      if(!$this->containsKey($key))
         $this->index[$key] = $item;
   }
   
   /**
    * @brief   Retorna todos os valores armazenados
    * @return  array
    */
   public function getAll(){
      return $this->index;
   }
   
   /**
    * @brief   Retorna um item do índice
    * @param   int $key
    */
   public function get($key){
      if($this->containsKey($key))
         return $this->index[$key];
   }
   
   /**
    * @brief   Atualiza um valor no índice
    * @param   int $key Chave de índice
    * @param   $item Item a ser atualizado
    */
   public function update($key, $item){
      if($this->containsKey($key))
         $this->index[$key] = $item;
   }
   
   /**
    * @brief   Remove um item da coleção pela chave do índice
    * @param   int $key Chave do índice
    */
   public function remove($key){
      if($this->containsKey($key))
         unset($this->index[$key]);
   }
   
   /**
    * @brief   Limpa a lista e todos os itens
    */
   public function clear(){
      if(!$this->isEmpty())
         $this->index = array();
   }
   
   /**
    * @brief   Conta o número de itens no índice
    * @return  int
    */
   public function count(){
      return count($this->index);
   }
   
   /**
    * @brief   Verifica se existe um item armazenado
    * @param   $item Item a ser verificado
    * @return  bool
    */
   public function containsValue($item){
      if($this->isEmpty())
         return false;
      
      foreach($this->getAll() as $currentItem)
         if($currentItem == $item)
            return true;
      
       return false;
   }
   
   /**
    * @brief   Verifica se existe uma chave na coleção
    * @param   int $key Chave de índice
    * @return  bool
    */
   public function containsKey($key){
      return isset($this->index[$key]);
   }
   
   /**
    * @brief   Verifica se a coleção está vazia
    * @return  boolean
    */
   public function isEmpty(){
      if($this->count() == 0)
         return true;
      
      return false;
   }   
}