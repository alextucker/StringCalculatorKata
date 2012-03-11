<?php

class StringCalculator {
   
   public function add($string) {
      $numbers = explode(',', $string);
      $total = 0;
      foreach ($numbers as $number) {
	 $total += (int) $number;
      }
      return $total;
   }

}
