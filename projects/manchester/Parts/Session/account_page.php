<?php
session_start();
$main = $_SESSION['auth']['main']??false;
if (!$main){
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<h6>Welcome to <?=$_SESSION['auth']['fullname']?></h6>
<div class="header">
    <img class="CR7" src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/7db9d171986099.5bdb2ae4ea64f.png">

</div>
<div class="nav">
    <nav>
        <a href="main_page.php">Main</a> |
        <a href="account_page.php">Account</a> |
        <a href="logout_page.php">Log out</a>
    </nav>
</div>
<img src="https://editorial.uefa.com/resources/025a-0ea33bddaabd-49dcf5a99d07-1000/cristiano_ronaldo_has_plenty_to_look_forward_to_at_35.jpeg">
<style>
    img{
        height: 80%;
        width: 100%;
    }
    .header{
        height: 100px;
        width: 100%;
    }
    .CR7 {
        height: 118px;
        width: 218px;
    }
</style>
</body>
</html>
