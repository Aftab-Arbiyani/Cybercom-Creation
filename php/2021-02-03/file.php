<?php
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        if(!empty($name)){
            $handle = fopen('name.txt', 'a');
            fwrite($handle, $name.", ");
            fclose($handle);
        }
        else{
            echo 'please type a name';
        }
    }
    

?>


<form action="file.php" method="POST">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>