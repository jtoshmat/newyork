<?php
session_start();
$username = $_POST['username']??false;
$password = $_POST['password']??false;

if (!$username || !$password){
    header("Location: login.php?msg=You missed username or password");
    exit;
}

if ($username !='sukhrobshadiyarov@outlook.com' || $password !='abc123'){
    header("Location: login.php?msg=Your username or password incorrect");
    exit;
}

$_SESSION['auth']=[
    'main' => 'true',
    'fullname' => 'Cristiano Ronaldos page'
];

header("Location: main_page.php");
exit();
