<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$value1 = 'AAAAAA';
//$value2 = 'BBBBBB';
//$value3 = 'CCCCCC';

setcookie("Manchester1", $value1);
//setcookie("Manchester2", $value2, time()+3600);  /* expire in 1 hour */
//setcookie("Manchester3", $value3, time()+3600, "/~demo/", "newyork.local", 1);
?>

<hr>

<nav>
    <a href="cookies.php">Cookies 1</a>
    <a href="cookies2.php">Cookies 2</a>
</nav>


<form method="post" action="backend.php">
    <p><label>Username: </label><input name="username" type="email" placeholder="Your Email Address"></p>
    <p><label>Password: </label><input name="password" type="password" placeholder="Your Password"></p>
    <p><label>Remember me</label><input type="checkbox" name="remember_me"></p>
    <p>
        <button type="reset">Reset</button>
        <button type="submit">Login</button>
    </p>
</form>

</body>
</html>