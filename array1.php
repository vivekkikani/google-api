<?php
function sort_country_list($a,$subket){
    foreach($a as $k=>$v){
        $b[$k]= strtolower($v[$subkey]);
    }
      asort($b);
      foreach($b as $key=>$val){
        $c[] = $a[$key];
      }
      return $c;
}
$shipping_country_lists=array(
'1'=>array('country'=>'australia', 'price'=>'8.00'),
'2'=>array('country'=>'brazil', 'price'=>'8.00'),
'3'=>array('country'=>'canada', 'price'=>'8.00'),
'4'=>array('country'=>'japan', 'price'=>'8.00'),
'5'=>array('country'=>'chile', 'price'=>'8.00'),
'6'=>array('country'=>'russia', 'price'=>'8.00'),
'7'=>array('country'=>'united states', 'price'=>'8.00'),
'8'=>array('country'=>'russie', 'price'=>'8.00'),
'9'=>array('country'=>'israel', 'price'=>'8.00'),
);
echo "<pre>";
print_r($shipping_country_lists);


?>