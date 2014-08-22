<?php

namespace Unimake\Test\Http;

use \Unimake\Http\Request;
use \Unimake\Http\Transaction;
use \Unimake\Http\RequestTypes;

require_once 'includes.php'; 

class TransactionTest extends \PHPUnit_Framework_TestCase {
   
   public function testTransaction(){
      $httpRequest = new Request();
      $httpRequest->setUrl('http://www.google.com');
      $httpRequest->setType(RequestTypes::GET);
      $httpRequest->setParam('t', 'full');
      
      $httpTransaction = new Transaction();
      $httpTransaction->sendRequest($httpRequest);
      $response = $httpTransaction->getResponse();
   }
   
   /**
    * @expectedException \Unimake\Http\Exceptions\UndefinedCurlErrorException
    * @expectedException \Unimake\Http\Exceptions\ConnectionTimedOutException
    */
   public function testTransactionTimedOut(){
      $httpRequest = new Request();
      $httpRequest->setUrl('http://www.google.com:88');
      $httpRequest->setType(RequestTypes::GET);
      $httpRequest->setParam('t', 'full');
      
      $httpTransaction = new Transaction();
      $httpTransaction->sendRequest($httpRequest);
      $response = $httpTransaction->getResponse();
   }
}