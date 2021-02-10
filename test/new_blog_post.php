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

    <h1 style="text-align: center;">Add New Blog Post</h1>
    <form action="new_blog_post.php" method="POST">
        <label for="">Title</label>
        <input type="text" name="title"><br><br>
        <label for="">Content</label>
        <textarea name="content" id="" cols="30" rows="10"></textarea><br><br>
        <label for="">URL</label>
        <input type="url" name="url"><br><br>
        <label for="">Published at</label>
        <input type="date"><br><br>
        <label for="">Category</label>
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
    if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['url']) && isset($_POST['category']) && isset($_POST['image'])){
        $title=$_POST['title'];
        $content=$_POST['content'];
        $url=$_POST['url'];
        $category=[];
        foreach($_POST['category'] as $value)
            {
                 $category=$value;
            }
        $image=$_POST['image'];
        $query="INSERT INTO `blog_post` (`title`, `content`, `url`, `category`, `image`) VALUES ('$title', '$content', '$url', '$category', '$image')";
        if($run=mysqli_query($two, $query))
        {
            echo 'jsdhmbc';
        }
        //header('location: blog_post.php');
    }
?>