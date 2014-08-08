<?php

namespace Unimake\Test\ShoppingCart;

use Unimake\ShoppingCart\Products\Product;

include_once 'includes.php';

class ProductTest extends \PHPUnit_Framework_TestCase {
   
   public function testGetSets(){
      $productId = 001;
      $productName = 'Awesome Product Name';
      $productDescription = 'Awesome product description';
      $productQuantity = 20;
      $productUnityPrice = 29.90;
      
      $product = new \Unimake\ShoppingCart\Products\Product();
      $product->setID($productId);
      $product->setName($productName);
      $product->setDescription($productDescription);
      $product->setQuantity($productQuantity);
      $product->setUnityPrice($productUnityPrice);
      
      $this->assertEquals($product->getID(), $productId);
      $this->assertEquals($product->getName(), $productName);
      $this->assertEquals($product->getDescription(), $productDescription);
      $this->assertEquals($product->getQuantity(), $productQuantity);
      $this->assertEquals($product->getUnityPrice(), $productUnityPrice);
   }
   
}