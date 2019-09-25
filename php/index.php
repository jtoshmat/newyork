
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="mybody">
<h1>PHP Questions</h1>
<?php

$cars = ["<span class='text'>What is OOP?</span>","<span class='text'>What is a String?</span>",
        "<span class='text'>What is a Boolean?</span>","<span class='text'>What is an Array?</span>",
        "<span class='text'>What is Float?</span>", "<span class='text'>What is Integer?</span>",
        "<span class='text'>What is Object</span>", "<span class='text'>What is Resource?</span>"];

$randomnumber =array_rand($cars, 1);
echo $cars[$randomnumber];
?>

<form>
        <input type="text" placeholder="">
        <input type="submit">
</form>

<style>
    .text{
        background-color: #f5c6cb;
        border-radius: 30px;
        border: 1px solid #0b2e13;
        padding: 2px;

    }
    .mybody{
        background-color: #7abaff;
        width: 230px;
        height: 340%;
        margin: 2px;
    }
</style>
</div>
</body>
</html>