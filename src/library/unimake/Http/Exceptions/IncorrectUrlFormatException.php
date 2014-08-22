<?php

namespace Unimake\Http\Exceptions;

use Unimake\Http\Resources\ExceptionMessage;

/**
 * @brief   Lançada quando o usuário informa uma url inválida.
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class InvalidUrlFormatException extends \Exception {
   
   /**
    * @brief   Construtor da exception
    */
   public function __construct() {
      parent::__construct(ExceptionMessage::INCORRECTURLFORMATEXCPETION);
   }
}