<?php
session_start();
$logout = $_SESSION['logout']??false;
if (!$logout){
    exit('Sorry');
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
</head>
<body>
<h3>
    Welcome <?=$_SESSION['fullname']?>
</h3>

<h1>Account</h1>

<div>
    <nav>
        <a href="account.php">Account</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="log_out.php">Logged_out</a>
    </nav>
</div>

<style>
    body{
        background-color: #e7f921;
    }
</style>




</body>
</html>