<?php
session_start();
$username = $_POST['username']??null;
$password = $_POST['password']??null;

if (!$username || !$password){
    exit('sorry');
}

if ($username !='sukhrobshadiyarov@outlook.com' || $password !='abc123'){
    exit('sorry');
}

$_SESSION['user_logged_in'] = true;
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

<h1>Backend</h1>


<div>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="account.php">ACCOUNT</a>
    </nav>
</div>

</body>
</html>
