<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monday, February 10, 2020</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<?php
$ismi = $_GET['ismi']??'Hojiakbar Tentakhujaev';
$yoshi = $_GET['yoshi']??'99';
$yashashi = $_GET['yashashi']??'Dalada';
$malumoti = $_GET['malumoti']??'Eng past malumot';
?>
<h3>Welcome <?=$ismi?>!!!</h3>

<p>
    I would like to introduce our special guest today, his name is <?=$ismi?> and he is very talented and very energetic member of our organization.
    <br>
    He is only <?=$yoshi?> years old and he already earned his <?=$malumoti?> degree and he lives in <?=$yashashi?>.

    <br>

    Please welcome him/her to our team!

    <br>

    WOHOOOOOOOO!!!!
</p>




Go to <a href="wednesday05.php">Wednesday</a>
<style>
    body{
        background-color: #ff713b;
    }
</style>
</body>
</html>
