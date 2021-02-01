<?php
    $name='Alex';
    $age=52;
    if(strtolower($name) === 'alex'){
        if($age >= 21){
            echo 'You\'re over 21';
        }
        else{
            echo 'Not over 21';
        }
    }
    else{
        echo 'You are not alex';
    }
?>