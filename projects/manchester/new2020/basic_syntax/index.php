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
<img src="../../class/home_work/img/youtubelogo.png" alt="">
<h1>My Calculator</h1>
<div class="calc">
    <form method="get" action="">
        <p>
            <label for="your number">Enter number</label>
            <input value="<?= $_GET['num1'] ?? null; ?>" name="num1" type="number" min="0" max="100">
                <br>
            <label for="select">Operator</label>
            <select name="select">
                <option name="+">+</option>
                <option name="-">-</option>
                <option name="*">*</option>
                <option name="/">/</option>
            </select>
                <br>
            <label for="your number2">Enter number</label>
            <input value="<?= $_GET['num2'] ?? null; ?>" name="num2" type="number" min="0" max="100">
            <br>
            <button name="submit">Submit</button>
        </p>
    </form>
</div>
<?php
    $total = 0;
    $num1 = $_GET['num1']??null;
    $num2 = $_GET['num2']??null;
    $select = $_GET['select']??null;
    if ($num1 && $num2) {
    $total = eval('return ' . $num1 . $select . $num2 . ';');
}?>
<div class="answer"><?php echo $total; ?></div>

<style>
    h1{
        top: 45px;
        text-align: center;
        margin-left: 42%;
    }

    .answer{
        position: relative;
        margin-left: 65%;
        top: -13%;
    }

    body {
        width: 700px;
        height: 500px;
        background-color: #dff9e7;
    }

    .calc {
        left: 338px;
        right: 52px;
        width: 50%;
        height: 50%;
        top: 41px;
        background-color: #f9f588;
        position: relative;
    }
</style>
</body>
</html>

