<?php ob_start(); ?>

<h1>My page</h1>
this my page

<?php
    $redirect_page='http://google.co.uk';
    $redirect=false;
    if($redirect == true){
        header("Location: ".$redirect_page);
    }
    ob_end_flush();
?>