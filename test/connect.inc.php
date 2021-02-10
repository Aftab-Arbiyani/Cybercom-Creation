<?php
    $two = mysqli_connect('localhost', 'root', '');
    $error='Could not connect';
    if(!mysqli_select_db($two, 'phptest')){
        @mysqli_error($error);
    }
?>