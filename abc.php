<?php
$student=["divas"=>["age"=>23,"marks"=>33,"year"=>22],
               "vivek"=>["age"=>20,"marks"=>39,"year"=>22]];
                echo"<pre>";
                print_r($student);
                // print_r($student[0]["divas_age"]);
                                                                           
                foreach($student as $key=>$value){ 
                echo $value['age']."=".$value['marks'].",".$value['year']."<br>";    
}
?>  