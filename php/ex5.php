<?php
    function add($num1, $num2){
        return ($num1+ $num2);
    }
    function divide($num1, $num2){
        return ($num1 / $num2);
    }
    $result = divide(add(50, 100), add(20, 10));
    echo $result;
?>