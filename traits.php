<?php
trait hello{
    public function sayhello(){
        echo "hello everyone";
    }
}

class base{
use hello;
}
class base2{
    use hello;
    }
$test = new base();
$test2= new base2();

$test->sayhello();
$test2->sayhello();


?>