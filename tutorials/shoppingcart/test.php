<?php
include 'backend/database.php';
$db = new \Database\database();
$user = $db->sql("SELECT * FROM users WHERE id=1");
echo "<pre>";
$pwd = password_hash("password", PASSWORD_BCRYPT);
echo $pwd;
echo "<hr>";
echo $user[0]['password'];
