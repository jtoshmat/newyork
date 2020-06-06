<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Comments</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
require_once '../database.php';
$db = new \Database\database();
$sql = "SELECT * FROM comments order by id desc limit 5";
$comments = $db->sql($sql);
?>
<div class="container">
<h4>My Family Photo</h4>
    <div>
        <img src="https://lh3.googleusercontent.com/proxy/0FkgluNqvt3iss_DH-5c9Np0vfwYRoATMvI4yZWniDmN9GrzeVG30hIChKIAzV9IIeoksAZMfe6orOV6kZWGqPLFcU9G3LKdh4pmgS6NJZW2N6ko6tQv0JsMI1E4qwpQy93-6fshqUT-TbvM">
    </div>
    <hr>
    <div id="comments">
        <?foreach ($comments as $comment):?>
        <p><?=$comment['comment']?></p>
        <?endforeach;?>
    </div>
    <hr>
    <form method="post" action="march31.php">
        <p>Your Comment</p>
        <p>
        <textarea class="mytextarea" name="your_comment">

        </textarea>
        </p>
        <p><button>Post</button></p>
    </form>
</div>

<style>
    .mytextarea{
        width: 500px;
        height: 200px;
    }
</style>

</body>
</html>