<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Post</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/post.css">
    <script src="../../../../js/jquery-3.4.1.min.js"></script>
    <script src="../js/post.js"></script>
</head>
<body>

<?php
require_once "../database.php";
$db = new \Database\database()['posts'];
$post_id = (int) $_GET['post_id']??1;
$sql = "SELECT * FROM post WHERE id = 1";
$post = $db->sql($sql);
$post = $post[0];



?>
<div class="container-fluid">
    <div class="post">
        <div class="image">
        </div>
        <div class="name">
            <p><?=$post['autor_name']?></p>
            <i class="fas fa-ellipsis-h"></i>
        </div>
        <div class="imagebox">
            <?=$post['description']?>
        </div>
        <div class="icons">
            <i class="fas fa-heart" id="heart"></i>
            <i class="far fa-comment"></i>
            <i class="fas fa-paper-plane"></i>
            <i class="far fa-bookmark" id="bookmark"></i>
        </div>
        <div class="commentbox"></div>
        <form>
            <input id="input" name="comment" type="text" placeholder="Your Comments">
            <button class="btn btn-info">POST</button>
        </form>

    </div>
</div>

</body>
</html>
