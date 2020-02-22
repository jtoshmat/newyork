<?php
//Global variable
/*
 * 1) $_GET: 1) URL QueryString - DONE  2) HTML Form via GET method - WIP
 * 2) $_POST
 * 3) $_REQUEST
 * 4) $_SESSION
 * 5) $_COOKIE
 * 6) $GLOBALS
 */

$get_variables = $_REQUEST;

$name = $get_variables['name']??'Jon';
$age = $get_variables['age']??21;
$city = $get_variables['city']??'Ferghana';
$keyword = $get_variables['keyword']??'My Keyword';

echo "<pre>";
echo "Hello, My name is {$name} and I am {$age} years old. I live in {$city} and I am comfortable with my apartment ";
echo "<br>";

echo "My keyword is ". $keyword;

echo "<hr>";
var_dump($GLOBALS["_GET"]);
echo "<hr>";

echo "</pre>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<h4>February 21, 2020</h4>
<ul>
    <li>GET</li>
    <li>POST</li>
    <li>REQUEST</li>
    <li>SESSION</li>
    <li>COOKIE</li>
    <li>GLOBALS</li>
</ul>

<nav>
    <a href="february21.php?name=Jessica&age=21&city=Brooklyn">February 21</a>
</nav>
<hr>
<form method="post">
    <p><label>Name: </label><input type="text" name="name" placeholder="Your keyword"></p>
    <p><label>Age: </label><input type="text" name="age" placeholder="Your keyword"></p>
    <p><label>City: </label><input type="text" name="city" placeholder="Your keyword"></p>
    <p><label>Search: </label><input type="text" name="keyword" placeholder="Your keyword"></p>
    <p><button type="submit" class="btn btn-success">Search</button></p>
</form>

</body>
</html>
