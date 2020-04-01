<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>

<form method="get" action="">
    <p>
        <label for="number">num1</label>
        <input value="<?=$_GET['num1']?>" name="num1" type="number">
        <br>

        <label for="option">Option</label>
        <select name="select">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>

        <label for="number">num2</label>
        <input value="<?=$_GET['num2']?>" name="num2" type="number">
        <br>

        <button name="submit">submit</button>
    </p>
</form>

<?php

$total = 0;
$num1 = $_GET['num1']??null;
$num2 = $_GET['num2']??null;
$select = $_GET['select']??null;

if ($num1 && $num2){
    $total = eval('return ' . $num1 . $select . $num2 . ';');
}
echo $total;

?>

</body>
</html>