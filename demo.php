<?php
$emp=array(
    array("employee_name"=>"x","employee_email"=>"y","employee_salary"=>"z"), 
    array("employee_name"=>"a", "employee_email"=>"b","employee_salary"=>"c") );
            echo"<pre>";
            print_r($emp); 
            print_r($emp[0]["employee_name"]); 
            
foreach($emp as $key=>$values){
    echo $values['employee_name']."=".$values['employee_salary']."<br>";
 
    // foreach($values as $key=>$data){                                                                        
    // echo "$data <br>";
    
   

    // foreach($values as $key=>$values){
    // echo "$key: $values <br>";
}   

?>