<?php
 class base{
    public $name;

    public function __construct($n){
        $this->name=$n;
    }
    public function show(){
        echo "your name : ".$this->name."<br>";
    }
 }
$test= new base("base");
$test->name="base";
$test->show(); 



?>