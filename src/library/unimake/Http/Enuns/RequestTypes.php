<?php

namespace Unimake\Http;

/**
 * @brief   Tipos de requisição
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
interface RequestTypes {
   
   /**
    * @brief   Requisição HTTP do tipo GET
    * @see     http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#GET
    */
   const GET  = 000;
   
   /**
    * @brief   Requisição HTTP do tipo POST
    * @see     http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol#POST
    */
   const POST = 001;
}