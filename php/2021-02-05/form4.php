<style>
    @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
</style>
<script src="validation4.js"></script>
<form action="form4.php" method="POST" onsubmit="return validation()">
    <table style=" margin-left: auto; margin-right: auto; ">
        <tr><h2 style="text-align: center; margin-top: 150px"><i class="fa fa-lock" aria-hidden="true"></i>Sign In</h2></td>
        </tr>
        <tr>
            <td><label for="">E-mail address</label><br><br></td>
        </tr>
        <tr>
            <td><input type="email" name='Email' id='email' placeholder="mail@address.com" style="background-color: f5f3f4; border: f5f3f4; padding: 10px" required><br><br></td>
        </tr>
        <tr>
            <td><label for="">Password</label><br><br></td>
        </tr>
        <tr>
            <td><input type="password" name="pass" id='pass' style="background-color: f5f3f4; border: f5f3f4; padding: 10px" required><br><br></td>
        </tr>
        <tr>
            <td style="text-align: center;"><input type="submit" value="Sign In" style="background-color: 149911; color: white; font-size: 25px; border-radius: 10px; border-color: 149911;"> </td>
        </tr>
    </table>
</form>
<br><br>
<?php
    if(isset($_POST['Email']) && isset($_POST['pass'])){
        if(isset($_POST['Email']) && isset($_POST['pass'])){
            echo '<center> Email is: '.$_POST['Email'].'<br><br>';
            echo 'Password is: '.$_POST['pass'].'</center>';
        }
    }
?>