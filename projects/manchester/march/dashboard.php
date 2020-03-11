<?php
session_start();
$account_page = $_SESSION['auth']['account']??false;
if (!$account_page){
    header("Location: login.php?msg=You are not authorized");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<h4>
    Welcome <?=$_SESSION['auth']['fullname']?>
</h4>
<div>
    <nav>
        <a href="account.php">Account</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="logout.php">Log out</a>
    </nav>
</div>
<div>
    <img src="https://image.shutterstock.com/image-vector/dashboard-user-admin-panel-template-260nw-589662776.jpg">
</div>
<style>
    img{
        width: 80%;
    }
</style>
</body>
</html>