<?php 
    require('connect.inc.php');

    $update = true;

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$run = mysqli_query($two, "SELECT * FROM `blog_category` WHERE id=$id");
        $row=@mysqli_num_rows($run);
		if ($row == 1 ) {
			$n = mysqli_fetch_array($run);
			$id=$n['id'];
            $image=$n['image'];
            $category=$n['category'];
            $created=$n['created'];
           
		}
	}
?>

<form action="" method="POST">

    <!--<label for="">ID</label><br>-->
    <input type="hidden" name='id' value="<?php echo $id; ?>"><br>
    <label for="">Image</label><br>
    <input type="file" name="image" value="<?php echo $image; ?>"><br>
    <label for="">Category</label><br>
    <input type="text" name="category" value="<?php echo $category; ?>"><br>
    <label for="">Created</label><br>
    <input type="text" name="created" value="<?php echo $created; ?>"><br>
    <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
    <?php endif ?>

</form>

<?php
    echo 'hsdbvn1';
    if(isset($_POST['id']) && isset($_POST['image']) && isset($_POST['category']) && isset($_POST['created']) ){
        echo 'hsdbvn2';
        //if(!empty($_POST['id']) && !empty($_POST['image']) && !empty($_POST['category']) && !empty($_POST['created'])){
            echo 'hsdbvn1';
            $id=$n['id'];
            $image=$n['image'];
            $category=$n['category'];
            $created=$n['created'];
            $query = "UPDATE `blog_category` SET `image`='$image', `category`='$category', `created`='$created' WHERE  `id`='$id'";
            if($run = mysqli_query($two, $query))    {echo 'jsdbhm v,we';}
            header('Location: index_category.php');
        //}
    }
?>