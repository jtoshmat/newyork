<?php
session_start();
$user_logged_in = $_SESSION['user_logged_in']??false;
if (!$user_logged_in){
    header("Location: login.php?msg=Sorry, you are not authorized to see this page");
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
    <title>Document</title>
</head>
<body>
<h3>Member Dashboard</h3>
<p>
    <nav>
        <a href="dashboard.php"> Home </a> |
        <a href="account.php"> Account </a> |
        <a href="logout.php"> Logout </a>
    </nav>
</p>

</body>
</html>