<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.js"></script>
</head>
<body>
<?php
    include_once 'header.php';
    session_start();
    $submit = $_POST['submit']??null;
    if ($submit=='Login') {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
        include_once '../inc/database.php';
        $user = $db->sql("select * from users where email='$username' and password='$password'");
        if(count($user)){
            $_SESSION['is_authorized'] = 'sdfsdfsdf';
            $_SESSION['user'] = $user[0];
            header('Location: http://newyork.local/chase/account.php');
        }else{
            echo "the user is bad";
        }
    }
?>
<br>
<h4>Login to your account</h4>

<a href="/chase/account.php">Account</a>

<form method="post">
    <p>Username: <input placeholder="umida@umida.com" required="required" name="username" type="email"></p>
    <p>Password: <input  required="required" name="password" type="password"></p>
    <p>
        <input name="reset" type="reset" value="Reset">
        <input name="submit" type="submit" value="Login">
    </p>
</form>

</body>
</html>