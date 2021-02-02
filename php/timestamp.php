<?php
    //$time=time();
    $time1=date('d m Y @ H:i:s', time()+40);
    echo 'current time is: '.$time1;

    echo '<br>'.$_SERVER['SCRIPT_NAME'];
?>