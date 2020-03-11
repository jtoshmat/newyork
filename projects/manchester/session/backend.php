<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if (!$username || !$password){
    header("Location: login.php?msg=Username or password missing");
    exit;
}
if ($username != 'sukhrobshadiyarov@outlook.com' || $password != 'abc123'){
    header("Location: login.php?msg=User name or password incorrect");
    exit;
}
$_SESSION['account_logged']= true;
header("Location: dashboard.php");
