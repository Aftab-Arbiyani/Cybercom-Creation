<?php 
    session_start();
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
        input[type=submit]{
            width:30%;
        }
    
        </style>
</head>

<body>

    <h1 style="text-align: center;">Add New Category</h1>
    <form action="new_blog_category.php" method="POST">
        <label for="">Title</label>
        <input type="text" name="title"><br><br>
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea><br><br>
        <label for="">URL</label>
        <input type="url" name="url"><br><br>
        <label for="">Meta Title</label>
        <input type="text" name='mtitle'><br><br>
        <label for="">Parent Category</label>
        <select name="category[]" id="" multiple>
            <option value="Lifestyle">Lifestyle</option>
            <option value="Health">Health</option>
            <option value="Education">Education</option>
            <option value="Music">Music</option>
        </select><br>
        <label for="">Image</label>
        <input type="file" name="image" id=""><br>
        <input type="submit" value="Submit" style="background-color: darkblue; font-size: 1.2em; color: white">
    </form>

</body>

<?php
    echo 'kdhbs';
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['category']) && isset($_POST['image']) && isset($_POST['mtitle'])){
        $title=$_POST['title']; echo 'kdhbssshfdm';
        $content=$_POST['content'];
        $url=$_POST['url'];
        $mtitle=$_POST['mtitle'];
        $category=[];
        foreach($_POST['category'] as $value)
            {
                 $category=$value;
            }
        $image=$_POST['image'];
        $query="INSERT INTO `new_blog_category` (`title`, `content`, `url`, `meta-title`, `parent-category`, `image`) VALUES ('$title', '$content', '$url', '$mtitle', '$category', '$image')";
        if($run=mysqli_query($two, $query)) {
            echo 'hdvgsannb';
            header('location: blog_category.php');
        }
        //header('location: blog_category.php');
    }
?>