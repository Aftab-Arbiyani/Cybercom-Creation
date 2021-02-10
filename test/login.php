<?php
    require('connect.inc.php');

    function redirect(){
        header("Location: registration.php");
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h3 >LOGIN</h3>
        <br>
        <fieldset>
        <form action="blog_post.php" target="_self" method="POST">
            <br>
            <label for="">Email</label><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <label for="">Password</label><br>
            <input type="password" name="pass" placeholder="Password" required><br>
  
            <input type="submit" value="LOGIN"  style="background-color: dodgerblue; "><br>
            
        </form>
        <input type="submit" value="REGISTER NOW" style="background-color: dodgerblue; " onclick="redirect()">
    </body>
</html>

<?php
    
    if(isset($_POST['email']) && isset($_POST['pass'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        if(!empty($_POST['email']) && !empty($_POST['pass'])){
            $query="SELECT `email`, `password` FROM `register` WHERE `email`='$email' AND `password`='$pass'";
            if($run=mysqli_query($two, $query)){
                $row=mysqli_num_rows($run);
                if($row == 0){
                    echo 'Invalid username or password';
                }else{
                    header('Location: blog_post.php');
                }
            }
        }
    }
    
?>
<script>
    function redirect(){
        window.open('registration.php');
    }
</script>