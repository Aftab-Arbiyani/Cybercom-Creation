<?php
    if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])){
        $day=$_GET['day'];
        $date=$_GET['date'];
        $year=$_GET['year'];
        if(!empty($day) && !empty($date) && !empty($year)){
            echo 'ok';
        }
        else{
            echo 'fill all the fields';
        }
    }
?>
<hr>
<br>
<form action="GET.php" method="GET">
    Day: <input type="text" name="day"><br>
    Date: <input type="text" name="date"><br>
    Year: <input type="text" name="year"><br>
    <input type="submit" value="Submit">
</form>