<?php

namespace Unimake\Http\Exceptions;

use Unimake\Http\Resources\ExceptionMessage;

/**
 * @brief   Exception lançada quando há uma tentativa de se
 * conectar em um protocolo que não é suportado.
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class UnsuportedProtocolException extends \Exception {
   
   /**
    * @brief   Construtor da exception
    */
   public function __construct() {
      parent::__construct(ExceptionMessage::UNSUPORTEDPROTOCOLEXCEPTION);
   }
}