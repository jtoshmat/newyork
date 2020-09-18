<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../fontawesome/css/all.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
require_once "databaza2.php";
$db = new \Database\database();
$sql = "SELECT * FROM comments order by id desc";
$comments = $db->sql($sql);
?>
<div class="container">
    <div class="logodiv">

    </div>
    <i id="icon_list" class=" fas fa-list"></i>
    <p class="paragraff"><hd>Jon Toshmatov</hd> posted<br>
    49 min ago<i id="earth" class="fas fa-globe-asia"></i></p>
    <div>
        <iframe width="660" height="250" src="https://www.youtube.com/embed/dxKTNftNC6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <p><i id="likes" class="far fa-thumbs-up">Like</i><i id="comment" class="fas fa-comment-alt">Comment</i><i id="shares" class="fas fa-share">Share</i></p>
    <hr>
    <div id="comments">
        <?foreach ($comments as $comment):?>
        <li><?=$comment['comment']?></li>
        <?endforeach;?>
    </div>
    <hr>
    <form method="post" action="databaza2.php">
        <p><textarea name="your_comment" class="textarea">
        </textarea>
        </p>
        <p>
            <button class="btn btn-success">Post</button>
        </p>
    </form>
</div>
<style>
    body{
        background-color: #14acc0;
    }
    hd{
        font-size: 150%;
        font-weight: bolder;
        color: #0e6fbb;
    }
    .paragraff{
        position: relative;
        top: -20px;
        cursor: pointer;
    }
    .container{
        width: 695px;
        height: auto;
        background-color: white;
    }
    .logodiv{
        background-color: #3962ab;
        width: 105%;
        height: 60px;
        position: relative;
        left: -15px;
        background-size: 40% 100%;
        background-repeat: no-repeat;
        background-image: url("https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/07/sdffdsafsdf-1200x604.png");
        cursor: pointer;
    }
    #icon_list{
        position: relative;
        left: 631px;
        top: -47px;
        font-size: 200%;
        color: whitesmoke;
        cursor: pointer;
    }
    .container img {
        width: 300px;
        height: 300px;
        margin: auto;
        float: none;
    }
    #comments{
        width: 100%;
        height: 150px;
        font-size: 80%;
        font-weight: bolder;
        color: black;
        cursor: pointer;
        overflow: scroll;
        list-style: none;
        display: none;
    }
    #comments li:nth-child(even){
        background-color: rgb(57, 107, 180);
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        padding: 4px;
        text-align: right;
        color: whitesmoke;
    }
    #comments li{
        background-color: rgba(20, 172, 192, 0.46);
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;
        padding: 4px;
        text-align: left;
    }
    .textarea{
        width: 100%;
        height: 100px;
        background-color: whitesmoke;
        color: black;
        font-weight: bolder;
        border: none;
    }
    .btn{
        text-align: center;
        position: relative;
        top: -20px;
        left: 300px;
    }
    #likes{
        font-size: 100%;
        font-weight: bolder;
        color: black;
        cursor: pointer;
    }
    #comment{
        font-size: 100%;
        position: relative;
        left: 230px;
        cursor: pointer;
        color: black;
    }
    #shares{
        font-size: 100%;
        position: relative;
        left: 480px;
        font-weight: bolder;
        cursor: pointer;
        color: black;
    }
    #earth{
        margin: 10px;
        color: #2c4d9b;
    }
</style>
<script>
    $(function () {
        $("#likes").click(function () {
            $(this).css("color", "red");
        });
    });
    $(function () {
        $("#comment").click(function () {
            $("#comments").slideToggle();

        });
    });
    $(function () {
        $("#comment").click(function () {
            $(this).css("color","blue");

        });

    });
    $(function () {
        $("#shares").click(function () {
            $(this).css("color","green");

        });

    });
</script>

</body>
</html>
