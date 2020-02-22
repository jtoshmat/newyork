<?php
namespace Shahriyor;
use Database\database;

include_once '../inc/database.php';
class Login{
    protected $db;
    public $parms;

    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();
    }

    public function verifyUser(){
        $email = $this->parms['email'];
        $password  = $this->parms['password'];
        return $this->db->sql("select * from users where email='".$email."' and password='".$password."'");
    }
}

$login = new Login();
$result = $login->verifyUser();
var_dump($result);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>
<div class="box">
    <h2 style="text-align: center">Login</h2>
    <p style="text-align: center; opacity: 0.5; font-size: 14px">ACCESS YOUR ACCOUNT</p>
    <hr>
    <form method="post">
        <p style="font-size: 14px; margin-left: 6px">YOUR EMAIL ADDRESS:</p>
        <input class="email" type="email" placeholder="Your email address" required="required" name="email">
        <p style="font-size: 14px; margin-left: 6px">YOUR PASSWORD:</p>
        <input class="email" type="password" placeholder="Your password" required="required" name="password">
        <button class="login" type="submit">Login</button>
    </form>

    <p style="text-align: center; text-decoration: underline; margin-top: 15px; margin-bottom: 15px"><a href="loginFormBackend-1.php">Forgot Password?</p>
    <hr>
    <p style="text-align: center"><a href="loginFormBackend-2.php">Not yet a student? Sign up</a></p>
</div>


<style>
    .box {
        width: 600px;
        height: 410px;
        margin: auto;
        margin-top: 200px;
        background-color: white;
    }
    body {
        background-color: #ebebeb;
    }
    .email {
        margin-left: 10px;
        width: 570px;
        height: 30px;
        font-size: 16px;
        border-radius: 5px;
    }
    .login {
        width: 575px;
        height: 25px;
        margin-left: 10px;
        margin-top: 10px;
        background-color: dodgerblue;
        border-radius: 5px;
        color: white;
    }


</style>


</body>
</html>
