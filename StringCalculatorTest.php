<?php

include 'StringCalculator.php';

class StringCalculatorTest extends PHPUnit_Framework_TestCase {

   public function setUp() {

   }

   public function teatDown() {

   }

   public function testEmptyString() {
      $calc = new StringCalculator();
      $this->assertEquals(0, $calc->add(''));
   }
   
   public function testSpace() {
      $calc = new StringCalculator();
      $this->assertEquals(0, $calc->add(' '));
   }
   
   public function testZero() {
      $calc = new StringCalculator();
      $this->assertEquals(0, $calc->add('0'));
   }
   
   public function testOne() {
      $calc = new StringCalculator();
      $this->assertEquals(1, $calc->add('1'));
   }
}
