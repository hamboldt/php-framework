<?php

namespace Unimake\Tests\Http;

use \Unimake\Http\Request;
use \Unimake\Http\Transaction;
use \Unimake\Http\RequestTypes;

require_once 'includes.php'; 

class TransactionTest extends \PHPUnit_Framework_TestCase {
   
   public function testTransaction(){
      
      $httpRequest = new Request();
      $httpRequest->setUrl('http://unimake2.com.br/autoupdate/serversdownloadlist.php?t=full');
      $httpRequest->setType(RequestTypes::GET);
      
      $httpTransaction = new Transaction();
      $httpTransaction->sendRequest($httpRequest);
      $response = $httpTransaction->getResponse();
      
      var_dump($response->getText());
   }
   
}