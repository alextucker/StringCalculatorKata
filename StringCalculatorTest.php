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
   
   public function testTen() {
      $this->assertEquals(10, $this->calc->add('10'));
   }
   
   public function testHundred() {
      $this->assertEquals(100, $this->calc->add('100'));
   }
   
   public function test0Plus0() {
      $this->assertEquals(0, $this->calc->add('0,0'));
   }
   
   public function test1Plus0() {
      $this->assertEquals(1, $this->calc->add('1,0'));
   }
   
   public function test1Plus1() {
      $this->assertEquals(2, $this->calc->add('1,1'));
   }
}
