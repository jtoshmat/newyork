<?php
session_start();

$username = "jon@jon.com";
$password = "abc123";


$parms = $_POST;

$input_email = $parms['email'];
$input_password = $parms['password'];

if ($input_email == $username && $input_password == $password){
    $_SESSION['is_user_logged_in'] = 1;
    header("Location: members.php");
    exit("You are being redirected to members area");
}else{
    $_SESSION['is_user_logged_in'] = 0;
}
?>

<p>We are sorry that we were not able to authenticate your credentials.</p>

<p>Please try again later</p>
