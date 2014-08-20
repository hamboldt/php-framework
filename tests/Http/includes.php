<?php

$dir = getcwd();

if(!preg_match("/travis/", getcwd())) 
        $dir = '..';

require_once $dir . '/src/library/unimake/Http/Interfaces/ITransaction.php';
require_once $dir . '/src/library/unimake/Http/Interfaces/IRequest.php';
require_once $dir . '/src/library/unimake/Http/Interfaces/IResponse.php';
require_once $dir . '/src/library/unimake/Http/Enuns/RequestTypes.php';
require_once $dir . '/src/library/unimake/Http/Transaction.php';
require_once $dir . '/src/library/unimake/Http/Request.php';
require_once $dir . '/src/library/unimake/Http/Response.php';
require_once $dir . '/src/library/unimake/Http/RequestCurlAdapter.php';