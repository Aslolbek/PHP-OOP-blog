<?php 

    require_once 'config/bootstrap.php';
    $post_id = $_GET['id'];
    $post = Post::getOne($post_id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML5 Template</title>
  
</head>
<body>

<h1>OOP BLOG</h1>

<ul>

    <li>
        <h1><?= $post->id.' - '.$post->title ?></h1></a>
        <p><?= $post->body ?></p>
        <small><?= $post->created ?></small>


    </li>
</ul>
</body>
</html>