<?php

$handle = fopen("new.csv","w") or die("there is problem");
$a="divas => age=23,marks=33,year=22\n";
fwrite($handle,$a);

$b="joye => age=20,marks=39,year=22\n";
fwrite($handle,$b);

fclose($handle);
?>
