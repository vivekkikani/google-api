<?php
if(isset($_FILES['image'])){
    echo "<pre>";   
    print_r($_FILES); 
    
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];

    move_uploaded_file($file_tmp,"uploadfile/".$file_name);

}                   
?>





<html>
    <body>
    <form action=""method="post" enctype ="multipart/form-data">  
        <p> <input type = "file" name ="image"></p>
        <p><input type="submit"></p>
</body>
</form>
</html>

<html>
    <body>
    <form action=""method="post" enctype ="multipart/form-data">  
        <p> <input type = "file" name ="image"></p>
        <p><input type="submit"></p>
</body>
</form>
</html>

<html>
    <body>
    <form action=""method="post" enctype ="multipart/form-data">  
        <p> <input type = "file" name ="image"></p>
        <p><input type="submit"></p>
</body>
</form>
</html>