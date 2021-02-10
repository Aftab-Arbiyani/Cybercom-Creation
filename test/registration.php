<?php
    require('connect.inc.php');
?>



<head>
<style>
        input, select, textarea{
            padding: 10px;
            width: 45%;
            margin-left: auto;
            margin-right: auto;
            display: block;   
        }
        label{
            margin-left: 10px;
        }
        
        body{
            border: 1px solid black;
            margin-top: 100px;
            margin-bottom: 120px;
            margin-left: 500px;
            margin-right: 500px;
        }
    
        </style>
</head>

    

    <h2 style="text-align: center;">Registration</h2>
        <form action="" method="POST">
        <label for="">Prefix</label>
        <select name="" id="">
            <option name="game[]" value="Mr">Mr.</option>
            <option name="game[]" value="Mrs">Mrs.</option>
            <option name="game[]" value="Ms">Ms.</option>
        </select>
        <label for="">First Name</label>
        <input type="text" name="fname" placeholder="Name" id="name" required><br>
        <label for="">Last Name</label>
        <input type="text" name="lname" placeholder="Name"  required><br>
        <label for="">Mobile Number</label>
        <input type="tel" name="phone"><br>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" required><br>
        <label for="">Password</label>
        <input id="one" name="pass1" type="password" placeholder="Password" required><br>
        <label for="">Confirm Password</label>
        <input id="two" name="pass2" type="password" placeholder="Confirm Password" required><br>
        <label for="">Information</label>
        <textarea name="information"  cols="30" rows="10" id="information"></textarea><br>
        <input type="checkbox" name="check" required><label>Terms & Conditions</label><br>
        <input type="submit" value="Register" style="border-radius: 10px; background-color: daodgerblue;"  >

    </form>

<?php
    echo 'ejwfgbmehwb';
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['information']) && isset($_POST['check'])){
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['pass1']) && !empty($_POST['pass2']) && !empty($_POST['information']) && isset($_POST['check'])){
            require('connect.inc.php');
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];
            $info=$_POST['information'];
            $pre=$_POST['game'];
            if($pass1 != $pass2){
                echo 'Both pass ar difek,n';
            }else{
                $query="INSERT INTO `register` (`id`, `prefix`, `firstname`, `lastname`, `email`, `phone`, `password`, `information`) VALUES ('', 'Mrs', '$fname', '$lname', '$email', '$phone', '$pass1', '$info')";
                $run=mysqli_query($two, $query);
                header('location: category.php');
            }
            
                    
                
        }

        
    }
    }
?>
