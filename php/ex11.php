<?php
    $one=mysqli_connect('localhost', 'root', '');
    if(!mysqli_select_db($one, 'database1')){
        mysqli_error('jwygdb');
    }
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;
    function ip_exists($ip){
        global $ip;
        echo $ip;
    }
    
        $query =    "INSERT INTO `hits_ip` VALUES ('$ip')";
        $run = mysqli_query($one, $query);
?>