<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Math Operation</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>



<div class="mycalc">
    <form method="get">
        <p>
            <label>Enter Your Number 1: </label>
            <input value="<?=$_GET['num1']??null;?>" name="num1" type="number" min="0" max="100">
            <br>

            <label>Pick Your Operator </label>
            <select name="operator">
                <option name="+">+</option>
                <option name="-">-</option>
                <option name="*">*</option>
                <option name="/">/</option>
            </select>
            <br>

            <label>Enter Your Number 2: </label>
            <input value="<?=$_GET['num2']??null;?>" name="num2" type="number" min="0" max="100">
            <br>

            <button type="submit">Submit</button>
        </p>
    </form>
</div>

<div class="results">
    <?php
    $total = 0;
    $num1 = $_GET['num1']??5;
    $num2 = $_GET['num2']??5;
    $operator = $_GET['operator']??'-';

    if ($num1 && $num2){
        $total = eval('return '.$num1.$operator.$num2.';');
    }

    echo $total;

    ?>
</div>

</body>
</html>
