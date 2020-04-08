<?php
session_start();
$user_logged_in = $_SESSION['user_logged_in']??false;
if (!$user_logged_in){
    exit('Sorry, you are not authorized to see this page');
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
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<h1>Dashboard</h1>


<div>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="account.php">ACCOUNT</a>
    </nav>
</div>

<style>
    body{
        background-color: #f9f919;
    }
</style>

</body>
</html>