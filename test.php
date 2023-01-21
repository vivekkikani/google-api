<?php
$bio_data=[
          ["demo",24,5.4],
          ["test",23,5.11],
          ["xyz",22,5.10],
];
echo"<pre>";
print_r($bio_data);

foreach($bio_data as $v1)
{
    echo $v1['0']."=".$v1['1'].",".$v1['2']."<br>";
}

?>
<!-- echo $value['demo']."=".$value['age'].",".$value['litha']."<br>";     -->
