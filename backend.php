<?php
session_start();

$username = $_POST['username']??null;
$password = $_POST['password']??null;

if (!$username || !$password ){
    header("Location: login.php?msg=Username or password is missing");
    exit;
}

if ($username!='jontoshmatov@yahoo.com' || $password != 'abc123'){
    header("Location: login.php?msg=Username or password did not match with our database");
    exit;
}

$_SESSION['user_logged_in'] = true;
header("Location: dashboard.php");
exit;
?>


