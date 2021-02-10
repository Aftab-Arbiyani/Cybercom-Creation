<?php 
    session_start();
    require('connect.inc.php');
?>

<style>
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
</style>


    <a href='blog_category.php'><h4 style="color: white; background-color:aqua; float: right;">Manage Category </h4></a>
    <a href='logout.php'><h4 style="color: white; background-color:crimson; float: right;">Log Out</h4></a> 
    <a href=''><h4 style="color: white; background-color: cadetblue; float: right;">My Profile</h4></a>
        <br><br>
    <h1>Blog Post</h1>
    <form action="new_blog_post.php" method="POST">
        <input type="submit" value="Add Blog Post"><br><br><br><br>
    </form>
    <table>

        <tr>
            <td>ID</td>
            <td>Category Name</td>
            <td>Title</td>
            <td>Published Date</td>
            <td colspan="2">Actions</td>
        </tr>
<?php
    $query="SELECT * FROM `category`";
    $run=mysqli_query($two, $query);
    while($row=mysqli_fetch_assoc($run)){ ?>
      <tr>
      <td> <?php echo $row['id']; ?></td>
        <td> <?php echo $row['category']; ?></td>
        <td><?php echo '<br>'.$row['title']; ?></td>
        <td> <?php echo $row['publish']; ?> </td>
        <td><a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td>
        <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
        </tr>
<?php } ?>
    </table>