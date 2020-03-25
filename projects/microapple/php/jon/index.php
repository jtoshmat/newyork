<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator with PHP</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<h4>Caluclator with PHP</h4>


<?php
function calculator($num1, $operator, $num2){
    $total = "$num1 $operator $num2";
    echo eval('return '.$total.';');
}

$number1 = $_GET['num1']??5;
$operator = $_GET['operator']??'+';
$number2 = $_GET['num2']??5;

echo "<div class='result'>";
calculator($number1,$operator, $number2);
echo "</div>"
?>

<form name="myform" method="get">
    <p>Num1: <input value="<?=$number1?>" name="num1" type="number"></p>
    <p>Operator:
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
            <option value="%">%</option>
        </select>
    </p>
    <p>Num2: <input value="<?=$number2?>" name="num2" type="number"></p>
    <p><button type="submit">Calculate</button></p>
</form>
<style>
    .result{
        width:400px;
        height: 200px;
        background-color: #2d6498;
        color:white;
        margin:100px auto;
        font-size: 350%;
        text-align: center;
        padding:20px;
    }
</style>
</body>
</html>