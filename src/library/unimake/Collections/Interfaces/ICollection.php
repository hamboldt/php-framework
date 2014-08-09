<?php

namespace Unimake\Collections\Interfaces;

/**
 * @brief   Interface para coleções
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface ICollection {
   
   /**
    * @brief   Adiciona um item na coleção
    * @param   int $key Chave de índice
    * @param   var $item Item a ser adicionado
    * @return  void
    */
   public function add($key, $item);
   
   /**
    * @brief   Retorna um item do índice
    * @param   int $key
    * @return  var
    */
   public function get($key);
   
   /**
    * @brief   Retorna todos os valores armazenados
    * @return  array
    */
   public function getAll();
   
   /**
    * @brief   Atualiza um valor no índice
    * @param   int $key Chave de índice
    * @param   var $item Item a ser atualizado
    * @return  void
    */
   public function update($key, $item);
   
   /**
    * @brief   Remove um item da coleção pela chave do índice
    * @param   int $key Chave do índice
    * @return  void
    */
   public function remove($key);
   
   /**
    * @brief   Limpa a lista e todos os itens
    * @return  void
    */
   public function clear();
   
   /**
    * @brief   Conta o número de itens no índice
    * @return  int
    */
   public function count();
   
   /**
    * @brief   Verifica se existe um item armazenado
    * @param   var $item Item a ser verificado
    * @return  bool
    */
   public function containsValue($item);
   
   /**
    * @brief   Verifica se existe uma chave na coleção
    * @param   int $key Chave de índice
    * @return  bool
    */
   public function containsKey($key);
   
   /**
    * @brief   Verifica se a coleção está vazia
    * @return  boolean
    */
   public function isEmpty();
}