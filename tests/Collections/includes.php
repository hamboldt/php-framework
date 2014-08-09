<?php

$dir = getcwd();

if(!preg_match("/travis/", getcwd())) 
        $dir = '..';

require_once $dir . '/src/library/unimake/Collections/Interfaces/ICollection.php';
require_once $dir . '/src/library/unimake/Collections/Abstract/AbstractCollection.php';
require_once $dir . '/src/library/unimake/Collections/Collection.php';