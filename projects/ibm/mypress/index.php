<?php include_once "utilities.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to MyPress!</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div id="mycontent">

    <div class="myheader">
        <img class="logo" src="<?=$site[0]['logo']?>">
        <div class="mytitle">
            <?=strip_tags($site[0]['subject'])??"Welcome to my site!"?>
        </div>
    </div>

    <div class="mynavbar">
        <nav>
            <a href="index.php?id=1"> Page 1 </a>
            <a href="index.php?id=2"> Page 2 </a>
            <a href="index.php?id=3"> Page 3 </a>
            <a href="index.php?id=4"> Page 4 </a>
        </nav>
    </div>

    <div class="mycontainer">
        <div class="myquote">
            <?=$site[0]['quote']?>
        </div>
    </div>

    <div class="myfooter">
        <img class="social_media_icons"
             src="https://www.techymob.com/wp-content/uploads/2019/05/social-icons-A-min.png">
    </div>
    <button id="savebutton">Save</button>
    <div class="blog_content" contenteditable="false">
       <?=$site[0]['description']?>
    </div>

</div>
<style>

    #savebutton{
        display: none;
    }

    .mytitle{
        float: right;
        position: relative;
        top: 16px;
        right: 470px;
        font-size: 197%;
        text-shadow: black 3px 3px;
    }

    .blog_content{
        background-color: white;
        passinf:5px;
    }

    .myquote{
        width: 410px;
        height: 300px;
        background-color: darkred;
        color: #ffb90a;
        font-size: 120%;
        font-family: Verdana;
        position: relative;
        top: 87px;
        left: 20px;
        opacity: 0.8;
        padding: 20px;
        border-radius: 20px;
        box-shadow: black 5px 5px 5px 5px;
    }

    .mynavbar {
        background-color: black;
    }

    .mynavbar a {
        margin: 15px 15px;
        color: white;
        text-decoration: none;
        padding: 5px;

    }

    .mynavbar a:hover {
        color: red;
        border-bottom: 1px dotted yellow;
    }

    .social_media_icons {
        width: 500px;
        margin: 21px;
    }

    .myfooter {
        height: 100px;
        background-color: #2d6498;
        text-align: center;
    }

    .logo {
        width: 118px;
        margin: 2px 15px;
    }

    .myheader {
        width: 100%;
        height: 100px;
        background-color: #2d6498;
        color: white;
        border-bottom: 10px solid #ffca47;
    }

    .mycontainer {
        width: 100%;
        height: 500px;
        background-image: url("https://assets.entrepreneur.com/content/3x2/2000/20191127190639-shutterstock-431848417-crop.jpeg?width=700&crop=2:1");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border-bottom: 10px solid #ffca47;
    }


    body {
        background-color: #333b44;
    }

    #mycontent {
        width: 1000px;
        height: auto;
        margin: 20px auto;
        background-color: white;
    }
</style>
<script>
    $(function () {
        $(".blog_content").dblclick(function () {
            $("#savebutton").fadeIn('slow');
            var editable = $(this).attr("contenteditable");
            if (editable){
                $(this).attr("contenteditable", true);
            }else{
                $(this).attr("contenteditable", false);
            }
        });

        $("#savebutton").click(function () {
            var txt = $(".blog_content").text();
            alert(txt);
        });

    });
</script>
</body>
</html>