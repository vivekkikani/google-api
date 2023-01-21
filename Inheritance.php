<?php
class employee {
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
   echo "<h3> employee profile <h3>";
   echo "employee name:" .$this->name."<br>";
   echo "employee name:" .$this->age."<br>";
   echo "employee name:" .$this->salary."<br>";
    }
}
class manager extends employee{
    public $ta=1000;
    public $phone=300;
    public $totalsalary;

    function info(){
        $this->totalsalary= $this->salary + $this->ta +$this->phone;
        echo "<h3> manager profile <h3>";
        echo "employee name:" .$this->name."<br>";
        echo "employee name:" .$this->age."<br>";
        echo "employee name:" .$this->totalsalary."<br>";
         }
                 
}


$e1= new employee("jon",25,23000);
$e2=new manager("joye",25,30000);
$e1->info();



?>