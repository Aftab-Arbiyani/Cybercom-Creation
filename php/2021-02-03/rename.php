<?php
    $filename='rename.txt';
    $rand=rand(5000, 10000);
    if(rename($filename, $rand.'.txt')){
        echo 'file has been renamed '.$rand.'.txt';
    }
    else{
        echo 'Error';
    }
?>