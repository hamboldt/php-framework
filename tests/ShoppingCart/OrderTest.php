<?php

namespace Unimake\Test\ShoppingCart;

use Unimake\ShoppingCart\ShoppingCart;
use Unimake\ShoppingCart\Products\ProductFactory;
use Unimake\ShoppingCart\Products\Product;
use Unimake\ShoppingCart\Adapters\OrderAdapter;

include_once 'includes.php';

class OrderTest extends \PHPUnit_Framework_TestCase {
   
   public function testShoppingCartConvertionIntoAOrder(){
      
      $shoppingCart = new ShoppingCart();
      $shoppingCart->addProduct(ProductFactory::createProduct(001, 'A', 'B', 1, 10.00));
      $shoppingCart->addProduct(ProductFactory::createProduct(002, 'A', 'B', 5, 10.00));
      $shoppingCart->addProduct(ProductFactory::createProduct(003, 'A', 'B', 1, 10.00));
      $shoppingCart->delProduct(ProductFactory::createProduct(003, 'A', 'B', 1, 10.00));
      
      $order = OrderAdapter::adaptShoppingCart($shoppingCart);
      $order->setTotalDiscount(10.00);
      
      $this->assertEquals($order->getTotalPrice(), 50.00); 
   }
   
}