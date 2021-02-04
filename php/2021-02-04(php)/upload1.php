<?php
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $tmp_nm=$_FILES['file']['tmp_name'];
    $extension=strtolower(substr($name, strpos($name, '.')+1));
    $max_size=2000000;
    if(isset($name)){
        if(!empty($name)){
            if(($extension=='jpg' || $extension=='jpeg' || $extension=='png') && ($type=='image/jpeg' || $type=='image/jpg' || $type=='image/png') && $size <= $max_size){
                $location='files/';
                if(move_uploaded_file($tmp_nm, $location.$name)){
                    echo 'Uploaded';
                }
                else{
                    echo 'Error';
                }
            }
            else{
                echo "File must be jpg/jpeg/png and less the 2 mb";
            }
        }
    }
?>



<form action="upload1.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" value=""><br><br>
    <input type="submit" name="" value="Submit">
</form>