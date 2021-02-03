<?php
    session_start();
    if(isset($_SESSION['name'])){
        echo 'welocme ' .$_SESSION['name'];
    }
    else{
        echo 'please login';
    }
?>