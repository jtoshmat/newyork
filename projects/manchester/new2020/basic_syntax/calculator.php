<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<div>
<form method="get" action="">
    <p>
        <label for="num1">Number</label>
        <input value="<?=$_GET['num1']??null;?>" name="num1" type="number" min="0" max="100">
        <br>

        <label for="option">Option</label>
        <select name="option" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*">*</option>
        </select>
        <br>

        <label for="num2">Number</label>
        <input value="<?=$_GET['num2']??null;?>" name="num2" type="number" min="0" max="100">
        <br>

        <button type="submit">Submit</button>
        <br>
    </p>
</form>
</div>

<?php

$result = 0;

$num1 = $_GET['num1']??null;
$num2 = $_GET['num2']??null;
$option = $_GET['option']??null;


if ($num1 && $num2){
    $result = eval('return ' . $num1 . $option . $num2 . ';');
}
echo $result;

?>

</body>
</html>
