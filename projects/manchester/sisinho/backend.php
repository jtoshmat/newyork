<?php
session_start();
$url = $_SERVER["HTTP_REFERER"]??null;
$hacker = strpos($url, 'http://newyork.local/projects/manchester/sisinho/login.php');
if ($hacker === false){
    exit('BAD REQUEST');
}

$username = $_POST['username']??null;
$password = $_POST['password']??null;


if (!$username || !$password){
    header("Location: login.php?msg=Sorry, you are missing username or password");
    exit();
}

if ($username !='sukhrobshadiyarov@outlook.com' || $password !='abc123'){
    header("Location: login.php?msg=Sorry, your username or password incorrect");
    exit();
}

$_SESSION['logout'] = true;
$_SESSION['fullname'] = 'Shadiyarov Sukhrob';
header("Location: account.php");
