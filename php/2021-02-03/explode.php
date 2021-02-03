<?php
    $filename='name.txt';
    $handle=fopen($filename, 'r');
    $data=fread($handle, filesize($filename));
    $arr=explode(',', $data);
    foreach($arr as $a){
        echo $a;
    }

    $array=implode(",", $arr);
    echo '<br>'.$array;
?>