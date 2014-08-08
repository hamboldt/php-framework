<?php

# blá

$dir = getcwd();

if(!preg_match("/travis/", getcwd())) 
        $dir = '../..';

require_once $dir . '/src/library/unimake/ShoppingCart/ShoppingCart.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Order.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Interfaces/IShoppingCart.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Abstract/AbstractShoppingCart.php';

require_once $dir . '/src/library/unimake/ShoppingCart/Interfaces/IProduct.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Abstract/Products/AbstractProduct.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Products/Product.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Products/ProductFactory.php';