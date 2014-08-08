<?php

namespace Unimake\ObjectSerializer\Interfaces;

/**
 * @brief   Interface para o serializador de objetos
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface IObjectSerializer {
   
   /**
    * @brief   Serializa um objeto e guarda na sessão
    * @param   string $callbackName Nome que será reservado na sessão
    * @param   object $object Objeto que será guardado na sessão
    */
   public function serialize($callbackName, $object);
   
   /**
    * @brief   Retorna um objeto serializado na sessão
    * @param   string $callbackName Nome reservado na sessão
    * @return  object Objeto guardado na sessao
    */
   public function unserialize($callbackName);
   
   /**
    * @brief   Verifica se um objeto já foi serializado no destino
    * @param   string $callbackName Nome que será reservado na sessão
    * @param   object $object Objeto que será guardado na sessão
    * @return  bool
    */
   public function serialized($callbackName, $object);
   
}