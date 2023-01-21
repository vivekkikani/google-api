<?php
class student{
public $name,$age;
function __construct($name="no name",$age=0){
  echo "para construct called <br>";
  $this->name=$name;
  $this->age=$age;
  echo $this->name."<br>".$this->age;

   } 
   function __destruct(){
    echo "<br>object trashed";
   }
}
$stu = new student("jona",10);
?>




<!-- class student {
    function __construct(){
        echo "construct called";
    }
}
$stu= new student;
 -->
