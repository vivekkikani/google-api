<?php
class base{
 public $name ="parent class";
 public function calc($a,$b){
    return $a * $b;
 }
}
 class derived extends base{
    
    public $name ="child class";
    public function calc($a,$b){
        return $a + $b;
     }
 }
 $test=new base();

 echo $test->calc(5,10);
?>