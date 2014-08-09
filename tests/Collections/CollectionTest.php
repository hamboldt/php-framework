<?php

namespace Unimake\Test\Collections;

include_once 'includes.php';

class CollectionTests extends \PHPUnit_Framework_TestCase {
   
   public function testCollectionMethods(){
      
      $collection = new \Unimake\Collections\Collection();
      
      $this->assertEquals($collection->count(), 0);
      $this->assertEquals($collection->isEmpty(), true);
      $this->assertEquals($collection->containsKey(1), false);
      $this->assertEquals($collection->containsValue(22), false);
      
      $collection->add(1, '22');
      $collection->add(2, '33');
      
      $this->assertEquals($collection->count(), 2);
      $this->assertEquals($collection->isEmpty(), false);
      $this->assertEquals($collection->containsKey(1), true);
      $this->assertEquals($collection->containsValue(22), true);
      $this->assertEquals($collection->containsKey(2), true);
      $this->assertEquals($collection->containsValue(33), true);
      $this->assertEquals($collection->get(1), 22);
      $this->assertEquals($collection->get(2), 33); 
      
      $collection->remove(1);
      
      $this->assertEquals($collection->count(), 1);
      $this->assertEquals($collection->containsKey(1), false);
      $this->assertEquals($collection->containsValue(22), false);
      
      $collection->clear();
      
      $this->assertEquals($collection->count(), 0);
      $this->assertEquals($collection->isEmpty(), true);
   }
   
}