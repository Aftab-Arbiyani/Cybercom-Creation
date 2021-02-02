<?php

    $offset=0;
    if(isset($_POST['search']) && isset($_POST['input']) && isset($_POST['replace'])){
        $input=$_POST['input'];
        $search=$_POST['search'];
        $replace=$_POST['replace'];

        $search_len=strlen($search);

        if(!empty($input) && !empty($search) && !empty($replace)){
            while($strpos = strpos($input, $search, $offset)){
                $offset=$strpos+$search_len;
                $input=substr_replace($input, $replace, $strpos, $search_len);
            }
            echo $input;
        }
        else{
            echo 'enter some value';
        }
    }
?>

<form action="ex10.php" method="POST">
    <textarea name="input" id="" cols="30" rows="10"></textarea><br><br>
    Search:  <input type="text" name="search"><br><br>
    Replace:  <input type="text" name="replace"><br><br>
    <input type="submit" value="find and replace">
</form>