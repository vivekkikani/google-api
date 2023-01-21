<?php
interface parent1{
     
    public function calc($a,$b);
}
interface parent2{
    public function sub($a,$b);
}
class childclass implements parent1 , parent2{
    public function calu($a,$b){
        echo $a + $b;
    }
    public function sub($c,$b){
        echo $c  - $b;
    }
}

$test = new chlidclass();

$test->calu(10,30);
//      $test->sub(20,30);
?>