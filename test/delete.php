<?php
    require('connect.inc.php');
    $update=false;
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $query="DELETE FROM `category` WHERE `id`='$id'";
        mysqli_query($two, $query);
        $_SESSION['message'] = "Address deleted!"; 
        header('location: blog_post.php');
    }
?>