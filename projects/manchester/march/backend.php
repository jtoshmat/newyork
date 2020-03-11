<?php
$username = $_POST['username']??false;
$password = $_POST['password']??false;

if (!$username || !$password){
    header("Location: login.php?msg=Your username or password is empty");
    exit;
}

if ($username !='sukhrobshadiyarov@outlook.com' || $password !='abc123'){
    header("Location: login.php?msg=Sorry, username or password did not match");
    exit;
}

?>
