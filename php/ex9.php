<?php

    $find=array('alex', 'billy', 'dale');
    $replace=array('a**x', 'b**ly', 'd*le');
    //$input;
    if(isset($_POST['input']) && !empty($_POST['input'])){
        $input = $_POST['input'];
        $input1=str_replace($find, $replace, $input);
        echo $input1;
    }
?>

<hr>
<br>

<form action="ex9.php" method="POST">
    <textarea name="input" id="" cols="30" rows="10"> <?php echo $input; ?> </textarea><br>
    <input type="submit" value="submit">
</form>