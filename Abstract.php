<?php
 abstract class parentclass{

public $name;
abstract protected function calc($a,$b);   // ek abstarct hovo joye 

} 
class childclass extends parentclass{
    
    public function calc($a,$b){
        // echo $a + $b;
        echo "helloo";
    }
    

}
$test =new childclass();

$test->calc(10,30);
?>