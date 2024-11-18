
<?php

class Post {

        public static $pdo;
        public $id;
        public $title;
        public $body;
        public $created;

public static function getAll(){
    $stmt = self::$pdo->prepare("SELECT * FROM posts");
    $stmt->setFetchMode(PDO:: FETCH_CLASS, 'Post');   //DB dan o'qib olingan ma'lumotni Post classiga solishni amalga oshiradi
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

    return $posts;

}

public static function getOne($id){
    $stmt = self::$pdo->prepare("SELECT * FROM posts WHERE id=?");
    $stmt->setFetchMode(PDO:: FETCH_CLASS, 'Post');   //DB dan o'qib olingan ma'lumotni Post classiga solishni amalga oshiradi
    $stmt->execute([$id]);
    $post = $stmt->fetch();

    return $post;

}
    public static function create($title, $body){
        $stmt = self::$pdo->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");
        $stmt->execute(
    [

        'title'=> $title,
        'body' => $body

    ]);
    $row = $stmt->rowCount();
    return $row;
    }
    
}

?>