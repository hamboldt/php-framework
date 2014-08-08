<?php

namespace Unimake\Test\ShoppingCart;

use \Unimake\ShoppingCart\ShoppingCart;
use \Unimake\ShoppingCart\Products\ProductFactory;

include_once 'includes.php';

class ShoppingCartTest extends \PHPUnit_Framework_TestCase {
   
   public function testShoppingCartProductsMaintence(){
      
      $shoppingCart = new ShoppingCart();
      $shoppingCart->addProduct(ProductFactory::createProduct(001, 'A', 'B', 1, 10.10));
      $shoppingCart->addProduct(ProductFactory::createProduct(002, 'A', 'B', 5, 10.10));
      $shoppingCart->addProduct(ProductFactory::createProduct(003, 'A', 'B', 1, 10.10));
      $shoppingCart->delProduct(ProductFactory::createProduct(003, 'A', 'B', 1, 10.10));
      
      $this->assertEquals($shoppingCart->count(), 6);
   }
   
}