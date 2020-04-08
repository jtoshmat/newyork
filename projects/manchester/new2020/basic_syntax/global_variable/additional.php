<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Additional</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">

</head>
<body>

<h1>Welcome to Additional page</h1>

<?php
//
//    $name = $_GET['name']??null;
//    $position = $_GET['position']??null;
//    $age = $_GET['age']??null;
//    $nationality = $_GET['nationality']??null;
//
//echo "<pre>";
//echo "<br>";
//echo "Welcome to our club $name. $name position is $position. He is $age and he is from $nationality";
//
//?>

<?php
$parms = $_POST??null;

echo "<pre>";
print_r($parms);

?>


<a href="main.php">Main page</a>

<style>
    body{
        background-color: rgba(249, 33, 233, 0.35);
    }
</style>

</body>
</html>
