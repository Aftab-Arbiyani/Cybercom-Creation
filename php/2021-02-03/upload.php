<?php
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $tmp_nm=$_FILES['file']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){
            $location='files/';
            if(move_uploaded_file($tmp_nm, $location.$name)){
                echo 'Uploaded';
            }
        }
        else{
            echo 'choose a file';
        }
    }
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" value=""><br><br>
    <input type="submit" name="" value="Submit">
</form>