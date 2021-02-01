<?php
    $str="this is string";
    if(preg_match('/is/', $str)){
        echo 'Match found';
    }
    else{
        echo 'no match found';
    }
?>