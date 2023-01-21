<?php 




$a='("abc":20,"xyz":20.10,"joni":4.22)';
echo "<pre>";
print_r($a);
var_dump(json_decode($a));



// $a=array("abc","xyz","joni");
// echo "<pre>";
// print_r($a);
// echo json_encode($a);

?>