<h1>Absolute Classes regestration</h1>

<form action="form3.php" method="POST">
    Name:  <input type="text" name="Name" required><br><br>
    Email: <input type="email" name="Email" required><br><br>
    Time:  <input type="time" name="Time"><br><br>
    Classes:  <textarea name="Classes" id="" cols="30" rows="5"></textarea><br><br>
    Gender:  <input type="radio" name="Gender" value="Male"> Male<input type="radio" name="Gender" value="Female">Female<br><br>
    Select:  <select name="subject[]" size="4" multiple>
        <option value="Android">Android</option>
        <option value="Java">Java</option>
        <option value="C#">C#</option>
        <option value="Data Base">Data Base</option>
        <option value="Hadoop">Hadoop</option>
        <option value = "VB script">VB script</option>
    </select><br><br>
    Agree  <input type="checkbox" name="check" value="Agree" ><br><br>
    <input type="submit" name="" value="Submit">
</form>

<?php
    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Time']) && isset($_POST['Classes']) && isset($_POST['Gender']) && isset($_POST['subject']) && isset($_POST['check'])){
        if(!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Time']) && !empty($_POST['Classes']) && !empty($_POST['Gender']) && !empty($_POST['subject']) && !empty($_POST['check'])){
            echo '<h2>'.'Your given values are:'.'</h2><br><br>';
            echo 'Your name is:  '.$_POST['Name'].'<br><br>';
            echo 'Your email address is:  '.$_POST['Email'].'<br><br>';
            echo 'Your class time is:  '.$_POST['Time'].'<br><br>';
            echo 'Your class info is:  '.$_POST['Classes'].'<br><br>';
            echo 'Your subjects are:'.'<br><br>';
            foreach($_POST['subject'] as $value)
            {
                echo $value.'<br>';
            }
            echo '<br>'.'Your gender is:  '.$_POST['Gender'].'<br><br>';
            echo 'You agreed to the terms:  '.$_POST['check'];
        }
    }
?>