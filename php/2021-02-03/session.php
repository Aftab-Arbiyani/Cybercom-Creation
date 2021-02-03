<?php
    session_start();
    $_SESSION['name']='aft';

?>


<form action="session.php">
    Name: <input type="text" name="name">
    Password: <input type="password" name="pass">
    <input type="submit" value="Login">
    <input type="submit" value="Log Out" onclick="unset.php">
</form>