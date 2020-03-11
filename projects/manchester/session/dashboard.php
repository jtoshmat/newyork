<?php
session_start();
$account_logged = $_SESSION['account_logged']??false;
if (!$account_logged){
    header("Location: login.php?msg=oou are not authorized this page");
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
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<h1>Welcome to Dashboard</h1>

<div>
    <nav>
        <a href="dashboard.php"> Home </a> |
        <a href="account.php"> Account </a> |
        <a href="logout.php"> Log out </a>
    </nav>
</div>


</body>
</html>