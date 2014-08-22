<?php

namespace Unimake\Http\Resources;

/**
 * @brief   Mensagem de erro
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface ExceptionMessage {
   const CONNECTIONTIMEDOUTEXCEPTION = 'O tempo limite de espera de resposta expirou.';
   const UNSUPORTEDPROTOCOLEXCEPTION = 'O protocolo de conexão não é suportado.';
   const INCORRECTURLFORMATEXCPETION = 'O formato da URL é inválido.';
}