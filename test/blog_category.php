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
    <h1>Blog Category</h1>
    <form action="new_blog_category.php" action="Post">
    <input type="submit" value="Add Category"><br><br><br><br>
    </form>

    <table>

        <tr>
            <td>Category ID</td>
            <td>Category Image</td>
            <td>Category Name</td>
            <td>Createded Date</td>
            <td colspan="2">Actions</td>
        </tr>

<?php
    $query="SELECT * FROM `blog_category`";
    $run=mysqli_query($two, $query);
    while($row=mysqli_fetch_assoc($run)){ ?>
      <tr>
      <td> <?php echo $row['id']; ?></td>
        <td> <?php echo $row['image']; ?></td>
        <td><?php echo '<br>'.$row['category']; ?></td>
        <td> <?php echo $row['created']; ?> </td>
        <td><a href="index_category.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td>
        <td><a href="delete_category.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
        </tr>
<?php } ?>
    </table>
