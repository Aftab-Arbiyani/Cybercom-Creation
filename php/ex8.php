<form action="ex8.php" method="GET">
    Name: <input type="text" name="Name">
    <input type="submit" value="submit">
</form>

<?php
    if(isset($_GET['Name']) && !empty($_GET['Name'])){
        $name=$_GET['Name'];
        echo $name;
    }
?>