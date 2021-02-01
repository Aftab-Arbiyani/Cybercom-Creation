<?php
    $string='this is an example of string .';
    $count=str_word_count($string);
    echo "$count <br>";

    $count1=str_word_count($string, 1, '.');
    
    print_r ($count1);
    echo '<br>';

    #shuffel
    $str2='example of shuffel';

    $length=strlen($str2);
    echo "<br> $length";

    $half=substr($str2, 0, 5);
    echo "<br> $half <br>";

    $shuffel=str_shuffle($str2);
    echo $shuffel;

    $str1='this is php tutorial';
    $rev=strrev($str1);
    echo "<br> $rev <br>";

    similar_text($string, $str2, $result);
    echo $result;

    $str3='     this is an    example of   string';
    $str_trim=trim($str3);
    echo "<br> $str_trim <br>";
?>