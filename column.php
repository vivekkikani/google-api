<?php
$Array=array
(
    Array
        (
            'age' => 23,
            'marks' => 33,
            'year' => 22,
        ),

     Array
        (
            'age' => 20,
            'marks' => 39,
            'year' => 22,
        )

        );

      $newarray= array_column($Array,'marks');
      
     echo "<pre>";
      print_r($newarray);
?>