<?php
class myclass{
function getclassname(){
    return __CLASS__;
}
}
$obj = new myclass();
echo $obj->getclassname();
?>