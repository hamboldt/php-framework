<?php

namespace Unimake\Test\Analysis;

use Unimake\Analysys\Network\WebsiteAnalysis;

include 'includes.php';

class WebSiteAnalysisText extends \PHPUnit_Framework_TestCase {
   
   public function testWebSiteAvailable(){
      $availableRequest = WebsiteAnalysis::available("http://www.google.com");
      $this->assertEquals($availableRequest, true);
   }
   
   public function testWebSiteUnAvailable(){
      $availableRequest = WebsiteAnalysis::available("http://www.google.com:88");
      $this->assertEquals($availableRequest, false);
   }
   
}