<?php

include 'StringCalculator.php';

class StringCalculatorTest extends PHPUnit_Framework_TestCase {
   
   private $calc;
   public function setUp() {
      $this->calc = new StringCalculator();
   }

   public function teatDown() {

   }

   public function testEmptyString() {
      $this->assertEquals(0, $this->calc->add(''));
   }
   
   public function testSpace() {
      $this->assertEquals(0, $this->calc->add(' '));
   }
   
   public function testZero() {
      $this->assertEquals(0, $this->calc->add('0'));
   }
   
   public function testOne() {
      $this->assertEquals(1, $this->calc->add('1'));
   }
   
   public function testTwo() {
      $this->assertEquals(2, $this->calc->add('2'));
   }
}
