<?php

$handle = fopen("new.txt","w") or die("there is problem");
$a="i love php\n";
fwrite($handle,$a);

$b="i love css\n";
fwrite($handle,$b);

fclose($handle);
?>












<!-- // while(!feof($handle))
// {
//     $data=fgets($handle);
//     echo "$data <br>";
// } -->

<!-- if(fwrite ($handle,"good moring"."<br>"."hello php")== false)
 {
    echo "could not write";
 }else{
 echo "success";
 }
 fclose($handle);
 -->
