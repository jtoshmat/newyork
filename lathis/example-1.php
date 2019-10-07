<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Distance Calculator</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <script src="js/distance.js" type="text/javascript"></script>
</head>
<body>

<?php
$numbers = range(100,500);
$randomoperator = ['/','*','+','-','%'];

foreach ($numbers as $row=>$number){
    $row++;
    echo "$row): ".calculate(rand(1, 100),$number, $randomoperator[rand(0,4)]) ."<hr>";
}

function calculate($a, $b, $operator){
    return "$a $operator $b = ".eval("return $a  $operator  $b;");
}

/*echo "$a * $b = ". multiply($a,$b);
echo "<hr>";
echo "$a + $b = ".  addition($a,$b);
echo "<hr>";
echo "$a / $b = ".  divide($a,$b);
echo "<hr>";
echo "$a - $b = ".  subtraction($a,$b);
echo "<hr>";
​
function multiply($a, $b){
    return $a * $b;
}
​
function subtraction($a, $b){
    return $a - $b;
}
​
function divide($a, $b){
    return $a / $b;
}
​
function addition($a, $b){
    return $a + $b;
}*/

