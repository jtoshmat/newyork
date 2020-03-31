<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>COMMENT</title>
</head>
<body>

<?php
require_once "../database.php";
$db = new \Database\database();
$post_id = $_GET['post_id']??1;
$post_id = (int) $post_id;

$post = $db->sql("SELECT * FROM posts WHERE id = $post_id");
$comments = $db->sql("SELECT * FROM comments WHERE post_id = $post_id order by id desc");
$post = $post[0];
?>

<div class = container-fluid>
    <div class="top">
        <img class="pic" src="https://nordicapis.com/wp-content/uploads/Profile-Pic-Circle-Grey-Large.png" alt="profile">
        <span class="name"><?=$post['author_name']?></span>
            <br>
        <span class="time">4 hrs <i class ="fas fa-globe-americas"></i></span>
        <i class="fas fa-ellipsis-h"></i>
    </div>
    <div class="middle">
        <?=$post['description']?>
        <span class="likes"> <i class="far fa-thumbs-up"></i>10</span>
        <span class="comments"><?=count($comments)?> comments</span><br>
    </div>
    <div class="medium2">
        <hr>
        <table>
            <tr>
                <td><i class="far fa-thumbs-up"></i>Like</td>
                <td><i class="far fa-comment"></i>Comment</td>
                <td><i class="fas fa-share"></i>Share</td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="bottom">
        <div class="comments">
           <ul>
               <?foreach ($comments as $comment):?>
               <li><?=$comment['comment']?></li>
               <?endforeach;?>
           </ul>
        </div>
        <div class="commentbox">
            <img class = "profile"src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1200px-Circle-icons-profile.svg.png" alt="prof">
            <form method="post" action="post_comment.php">
            <input name="your_comment" type="text" placeholder="Write a comment...">
            <input name="post_id" value="<?=$post_id?>" type="hidden">
                <button type="submit">Post</button>
            </form>
        </div>
    </div>
</div>
<style>

    *{
        margin:0px;
        padding:0px;
    }

    .middle img{
        width:100%;
    }
    html, body{
        width:100%;
        height: 100%;
    }
    body{
        background-color: #e9ebee;
    }
    .container-fluid{
        background-color: #ffffff;
        margin: auto;
        height: auto;
        width: 500px;
        overflow: hidden;
        padding-bottom: 60px;
    }
    .pic {
        height: 45px;
        width: 45px;
        margin-top: 10px;
    }
    .name{
        margin-left: 8px;
        color: #334d8e;
        font-weight: bolder;
    }
    .name:hover{
        text-decoration: underline;
        cursor: pointer;
    }
    .time{
        position: relative;
        top: -21px;
        left: 56px;
        color: #8b8e90;
        font-size: smaller;
    }
    .fa-globe-americas{
        color: #454545;
    }
    .fa-ellipsis-h{
        float: right;
        margin-top: -40px;
        color: #505050;
        font-size: larger;
    }
    .utah{
        padding: 0;
        width: 499px;
        height: 342px;
        position: relative;
        left: -15px;
        border: #c2c3c7 1px solid;
    }
    .fa-thumbs-up{
        color: #31a0fd;
    }
    .likes{
        float: left;
        color: grey;
        font-size: small;
        margin: 4px;
    }
    .comments{
        color: black;
        font-size: smaller;
        margin-bottom: 20px;
        display: block;
    }
    .comments li{
        margin-bottom: 20px;
    }

    td{
        padding-left: 64px;

    }
    .medium2{
        height:100px;
    }
    .profile{
        height: 35px;
        width: 35px;
        margin: -3px;
    }
    input {
        color: grey;
        font-size: smaller;
        border-radius: 5px;
        border: grey 1px solid;
        width: 420px;
        margin-left: 5px;
        padding-left: 5px;
    }

</style>
</body>
</html>