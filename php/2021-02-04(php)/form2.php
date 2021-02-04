<style>
    table, tr, th, td{
        border: 1px solid black;
        width: 40%;
        margin-left: auto;
        margin-right: auto;
    }
    tr, th, td{
        background-color: blue;
    }
</style>

<script src="validation1.js"></script>

<form action="form2.php" method="POST" onsubmit=" return validateform()">
    <table>
        <tr>
            <th colspan="2" style="background-color: yellow;"><h2 style="color: red;">User Form</h2></th>
        </tr>
        <tr>
            <td><label>Enter Name</label></td>
            <td><input type="text" name="name" id="Name" required></td>
        </tr>
        <tr>
            <td><label>Enter Password</label></td>
            <td><input type="password" name="pass" id="Password" required></td>
        </tr>
        <tr>
            <td>Enter Address</td>
            <td><textarea name="address" id="add" cols="30" rows="10" required></textarea></td>
        </tr>
        <tr>
            <td>Select Game</td>
            <td>
                <input type="checkbox" name="game[]" id="check" value="Hockey">Hockey <br>
                <input type="checkbox" name="game[]" id="check" value="Football">Football <br>
                <input type="checkbox" name="game[]" id="check" value="Badminton">Badminton <br>
                <input type="checkbox" name="game[]" id="check" value="Cricket">Cricket <br>
                <input type="checkbox" name="game[]" id="check" value="Volley-Ball">Volley-Ball <br>
            </td>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="Male" id="gender">Male <input type="radio" name="gender" value="Female" id="gender">Female</td>
            </tr>
            <tr>
                <td>Select ur age</td>
                <td>
                    <select name="Age" id="" required>
                        <option value="0">Select</option>
                        <option value="18" name="Age">18</option>
                        <option value="19" name="Age">19</option>
                        <option value="20" name="Age">20</option>
                        <option value="21" name="Age">21</option>
                        <option value="22" name="Age">22</option>
                        <option value="23" name="Age">23</option>
                        <option value="24" name="Age">24</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left: 200px;"><input type="file" name="file" value="" required></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left: 200px;"><input type="reset" value="Reset"><input type="submit" value="Submit Form"></td>
            </tr>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['name']) && isset($_POST['pass']) && isset($_POST['Age']) && isset($_POST['file']) && isset($_POST['address'])){
        if(!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['Age']) && !empty($_POST['file']) && !empty($_POST['address'])){
            echo '<p style="padding-left: 450px;">Name:  '.$_POST['name'].'<br><br>';
            echo 'Password:  '.$_POST['pass'].'<br><br>';
            echo 'Address:  '.$_POST['address'].'<br><br>';
            echo '<strong>Games: <br></strong>';
            foreach($_POST['game'] as $value)
            {
                echo $value.'<br>';
            }
            echo '<br> gender:  '.$_POST['gender'].'<br><br>';
            echo 'Age:  '.$_POST['Age'].'</p><br>';
        }
    }
    
?>