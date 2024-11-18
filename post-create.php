<?php 

    require_once 'config/bootstrap.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $body = $_POST['body'];
        $result = Post::create($title, $body);

        if ($result == 1){
            
           header("location: index.php");
           exit;
        }
    }

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

<h1>Post yaratish</h1>

<form method="Post" action="">
    <div>

        <input type="text" name="title" placeholder="title">
    </div>
    <div>

        <textarea name="body" rows="10" cols="21" placeholder="body"></textarea>
    </div>
    <div>
        <button type="submit">Saqlash</button>
    </div>
</form>
</body>
</html>