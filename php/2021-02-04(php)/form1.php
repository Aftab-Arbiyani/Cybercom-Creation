<?php
   
?>
<script src="validation.js"></script>
<form action="form1.php" method="POST" onsubmit="return validation()">
    Name:  <br><input type="text" name="Name" value="" id="name" required><br><br>
    Email: <br><input type="email" name="Email" value="" id="email" required><br><br>
    Comment:  <br><textarea name="comment" id="" cols="30" id="com" rows="10" required></textarea><br><br>
    <input type="submit" name="" value="Submit">

</form>
<br><hr><br>
<?php

    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['comment'])){
        if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['comment'])){
            $name=$_POST['Name'];
            $email=$_POST['Email'];
            $comment=$_POST['comment'];
            echo 'Name: '.$name.'<br>';
            echo 'Email: '.$email.'<br>';
            echo 'Comment: '.$comment.'<br>';
        }
    }
?>