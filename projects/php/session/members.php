<?php
session_start();



if (!isset($_SESSION['is_user_logged_in'])) {
    header("Location: index.php");
}

if ($_SESSION['is_user_logged_in']==0){
    header("Location: index.php");
}

var_dump($_SESSION['is_user_logged_in']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div>
    <a class="btn btn-outline-danger" href="logout.php">Log out</a>
</div>

<h3><?=$_SESSION["country"]?></h3>
<h4><?=$_SESSION["state"]?></h4>

<div class="container">
     <img src="https://help.clickfunnels.com/hc/article_attachments/360009261753/2.gif">
</div>


</body>
</html>

