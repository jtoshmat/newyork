<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wednesday, February 05, 2020</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<?php
//Global variables
//$_GET --> In Progress

//$_POST
//$_REQUEST
//$_SESSION
//$_COOKIE
//$GLOBALS


$mujozh= [
    'ismi' => 'Umida',
    'yoshi' => 18,
   // 'yashashi' => 'Samarkand',
    'malumoti' => 'Certified'
];
?>


<h3>Welcome <?=$mujozh['ismi']?>!!!</h3>

<p>
    I would like to introduce our special guest today, his name is <?=$mujozh['ismi']?> and he is very talented and very energetic member of our organization.
    <br>
    He is only <?=$mujozh['yoshi']?> years old and he already earned his <?=$mujozh['malumoti']?> degree and he lives in Mars.

    <br>

    Please welcome him/her to our team!

    <br>

    WOHOOOOOOOO!!!!
</p>



Go to <a href="monday10.php">Monday</a>
<style>
    body{
        background-color: #6dcae5;
    }
</style>
</body>
</html>


