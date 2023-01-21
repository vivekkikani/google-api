<?php
class base{
    public static $name ="php";
}
    class derived extends base {
    public static function show(){
        echo parent::$name;
    }
}
    // public function __construct($n){
    //     self::$name = $n;
    // }


$test = new derived();
$test->show();
// echo base::$name;
// base::$show();

?>