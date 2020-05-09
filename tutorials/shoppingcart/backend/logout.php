<?php
session_start();
unset($_SESSION['user']);
session_destroy();
$url = "http://newyork.local/tutorials/shoppingcart/login.php";
$msg = "You are logged out successfully";
header("Location:".$url.'?msg='.$msg);
exit;
