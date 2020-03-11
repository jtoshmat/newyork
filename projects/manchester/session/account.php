<?php
session_start();
$account_logged = $_SESSION['account_logged']??false;
if (!$account_logged){
    header("Location: login.php?msg=ou are not authorized this page");
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
<h3>Welcome to Account</h3>
<div>
    <nav>
        <a href="dashboard.php"> Home </a> |
        <a href="account.php"> Account </a> |
        <a href="logout.php"> Log out </a>
    </nav>
</div>
<div>
    <img src="https://www.baycoastbank.com/mstinc/sdp/help/en/images/help_my_accounts.png">
</div>





<style>
    img{
        width: 80%;
    }
</style>
</body>
</html>