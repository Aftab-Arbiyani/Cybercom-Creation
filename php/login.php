<form action="login.php" method="GET">
    Choose a food type: <br>
    <select name="h" id="">
        <option value="u">Unhealthy</option>
        <option value="h">Healthy</option>
    </select><br>
    <input type="submit" value="Submit">
</form>
<br><br>


<?php
    $one=mysqli_connect('localhost', 'root', '');
    if(!mysqli_select_db($one, 'database1')){
        mysqli_error('jwygdb');
    }
    if(isset($_GET['h']) && !empty($_GET['h'])){
        $h=$_GET['h'];
        if($h == 'h' || $h == 'u'){
            $query = "SELECT `food`, `calories` FROM `food` WHERE `healthy`= '$h' ORDER BY `ID`";
            if($run = mysqli_query($one, $query)){

                if(mysqli_num_rows($run) == null){
                    echo 'No result';
                }
                else{
                    while($row = mysqli_fetch_assoc($run)){
                        $food = $row['food'];
                        $calories = $row['calories'];
                        echo $food.' has '.$calories.' calories.<br>';
                    }
                }
            }
        }
    }
?>