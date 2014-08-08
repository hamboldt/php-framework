<?php

namespace Unimake\ObjectSerializer;

use Unimake\ObjectSerializer\Interfaces\IObjectSerializer;

/**
 * @brief   Serializador de objetos
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class ObjectSerializer implements IObjectSerializer {
   
   /**
    * @brief   Serializa um objeto e guarda na sessão
    * @param   string $callbackName Nome que será reservado na sessão
    * @param   object $object Objeto que será guardado na sessão
    */
   public static function serialize($callbackName, $object){
      if(session_status() != PHP_SESSION_NONE)
         $_SESSION[$callbackName] = serialize($object);
   }
   
   /**
    * @brief   Retorna um objeto serializado na sessão
    * @param   string $callbackName Nome reservado na sessão
    * @return  object Objeto guardado na sessao
    */
   public static function unserialize($callbackName){
      if(session_status() != PHP_SESSION_NONE && isset($_SESSION[$callbackName]))
         return unserialize($_SESSION[$callbackName]);
   }
   
   /**
    * @brief   Verifica se um objeto já foi serializado no destino
    * @param   string $callbackName Nome que será reservado na sessão
    * @param   object $object Objeto que será guardado na sessão
    * @return  bool
    */
   public static function serialized($callbackName, $object){
      if(typeof(self::unserialize($callbackName)) == typeof($object))
         return true;
      
      return false;
   }
   
}