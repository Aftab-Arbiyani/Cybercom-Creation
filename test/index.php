<?php 
    require('connect.inc.php');

    $update = true;

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$run = mysqli_query($two, "SELECT * FROM `category` WHERE id=$id");
        $row=@mysqli_num_rows($run);
		if ($row == 1 ) {
			$n = mysqli_fetch_array($run);
			$id=$n['id'];
            $category=$n['category'];
            $publish=$n['publish'];
            $title=$n['title'];
           
		}
	}
?>

<form action="" method="POST">

    <!--<label for="">ID</label><br>-->
    <input type="hidden" name='id' value="<?php echo $id; ?>"><br>
    <label for="">Category</label><br>
    <input type="tel" name="category" value="<?php echo $category; ?>"><br>
    <label for="">Publish</label><br>
    <input type="text" name="publish" value="<?php echo $publish; ?>"><br>
    <label for="">Title</label><br>
    <input type="text" name="title" value="<?php echo $title; ?>"><br>
    <?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
    <?php endif ?>

</form>

<?php
    if(isset($_POST['id']) && isset($_POST['category']) && isset($_POST['publish']) && isset($_POST['title']) ){
        if(!empty($_POST['id']) && !empty($_POST['category']) && !empty($_POST['publish']) && !empty($_POST['title'])){
            $id=$_POST['id'];
            $category=$_POST['category'];
            $publish=$_POST['publish'];
            $title=$_POST['title'];
            $query = "UPDATE `category` SET `category`='$category', `title`='$title', `publish`='$publish' WHERE  `id`='$id'";
            if($run = mysqli_query($two, $query))    {echo '';}
            $_SESSION['message'] = "Address updated!";
            header('Location: blog_post.php');
        }
    }
?>