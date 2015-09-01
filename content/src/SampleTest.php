<?php

require_once('Sample.php');

class SampleTest extends PHPUnit_Framework_TestCase {
  public function setUp() {}
  public function tearDown() {}

  public function testHelloWorld() {
    $obj = new Sample();
    $this->assertTrue($obj->helloWorld() == "Hello!");
  }
}

?>
