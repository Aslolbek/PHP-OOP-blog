<?php 
require_once 'config/bootstrap.php';
$posts = Post::getAll();


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
<a href="post-create.php">Post yaratish</a>

<ul>

    <?php foreach($posts as $post): ?>

    <li>
        <a href="post.php?id=<?= $post->id ?>"><h4><?= $post->id.' '.$post->title ?></h4></a>
        <p><?= $post->body ?></p>


    </li>
    <?php  endforeach; ?>
</ul>
</body>
</html>
