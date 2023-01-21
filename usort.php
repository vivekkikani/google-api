<?php
function comparatorFunc( $x, $y)
    {   
        
        // if ($x== $y)
        //     return 0;
      
       
        // if ($x < $y)
        //     return -1;
        // else
        //     return 1;
    }
      
    $arr= array(2, 9, 1, 3, 5); 
  
    usort($arr, "comparatorFunc");
      echo "<pre>";
    print_r($arr);
  
?>