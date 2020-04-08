<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">

</head>
<body>

<h1>Welcome to Main page</h1>

<form method="post" action="additional.php">
    <p>
        <label for="login">Username</label>
        <input name="login" type="text" placeholder="Your username" min="0" max="10"><br>

        <label for="psw">Password</label>
        <input name="password" type="password" placeholder="Your password" min="0" max="10"><br>

    </p>

    <button name="login" type="submit">Submit</button><br><br>
</form>


<?php
//$player = [
//    'name' => 'David De Gea',
//    'position' => 'Goalkeeper',
//    'age' => 28,
//    'nationality' => 'Spain'
//]
//
//?>


<a href="additional.php">Additional page</a>


<style>
    body{
        background-color: #e3f987;
    }
</style>

</body>
</html>
