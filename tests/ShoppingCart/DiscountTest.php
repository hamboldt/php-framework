<?php

namespace Unimake\Test\ShoppingCart;

include 'includes.php';

/**
 * @brief   Testes referentes ao desconto
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class DiscountTest extends \PHPUnit_Framework_TestCase {
   
   public function testDiscountMaintence(){
      $discount = new \Unimake\ShoppingCart\Discounts\Discount();
      $discount->setID(01);
      $discount->setDiscountValue(22.00);
      
      $this->assertEquals($discount->getID(), 01);
      $this->assertEquals($discount->getDiscountValue(), 22.00);
   }
   
}