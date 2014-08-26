<?php

namespace Unimake\Test\ShoppingCart;

use Unimake\ShoppingCart\ShoppingCart;
use Unimake\ShoppingCart\Products\ProductFactory;
use Unimake\ShoppingCart\Products\Product;
use Unimake\ShoppingCart\Adapters\OrderAdapter;

include_once 'includes.php';

/**
 * @brief   Testes referente à venda
 * @author  Lucas A. de Araújo <lucas.andrade@unimake.com.br>
 */
class OrderTest extends \PHPUnit_Framework_TestCase {
   
   /**
    * @brief   Testa da rotina de aplicação do melhor desconto.
    */
   public function testBetterDiscountApplication(){
      
      $shoppingCart = new ShoppingCart();
      $shoppingCart->addProduct(ProductFactory::createProduct(001, 'A', 'B', 1, 50.00));
      
      $discount = new \Unimake\ShoppingCart\Discounts\Discount();
      $discount->setID(001);
      $discount->setDiscountValue(25.00);
      
      $order = OrderAdapter::adaptShoppingCart($shoppingCart);
      $order->addDiscount($discount);
      
      $this->assertEquals($order->getTotalDiscountedValue(), $discount->getDiscountValue());
      $this->assertEquals($order->getTotalProductsValue(),   50.00);
      $this->assertEquals($order->getTotalOrderValue(),      25.00);
   }
}