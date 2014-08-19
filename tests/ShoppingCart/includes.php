<?php

$dir = getcwd();

if(!preg_match("/travis/", getcwd())) 
        $dir = '..';

require_once $dir . '/src/library/unimake/Collections/Abstract/AbstractCollection.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Interfaces/IShoppingCart.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Abstract/AbstractShoppingCart.php';
require_once $dir . '/src/library/unimake/ShoppingCart/ShoppingCart.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Interfaces/IOrder.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Order.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Interfaces/Models/Products/IProduct.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Abstract/Products/AbstractProduct.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Models/Products/Product.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Models/Products/ProductFactory.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Adapters/OrderAdapter.php';
require_once $dir . '/src/library/unimake/ShoppingCart/Collections/DiscountCollection.php';