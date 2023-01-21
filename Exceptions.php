<?php
if(isset($_REQUEST['submit'])){
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    try
    {
   if($b<=0)
   {
    throw new Exception("value of b is invalid");
    
   }
   else{
    $result= $a /$b;
    echo $result;
   }
    }
  catch(Exception $e){
    echo $e->getmessage();

  }
}
?>
<html>
    <body>
        <form action= "" method="post">
        A:<input type="text" name ="a"><span> / </span>
        B:<input type="text" name="b">
        <input type="submit"value="submit" name="submit">
</form >
    </body>
</html>
