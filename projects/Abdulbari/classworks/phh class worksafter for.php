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
<div class="container-fluid" style="text-align: center">
    <div class="header">
        Welcome to My Calculate
    </        div>
    <?php



    ?>

    <div class="calculateup">
        <form method="post">
            <label>Calculate :</label>
                     <input name="inp1" type="number" min="5" max="35">
            <input name="inp2" type="number" min="77" max="103">
            <button type="submit">Submit</button>
        </form>
    </div>

</div>
</body>
<style>

    .summa {
    text-align: center;
    font-size: 35px;
    color: red;
    }
</style>
<?php

$name = $_POST['inp1'];
$name1 = $_POST['inp2'];

$summa = $name + $name1;
echo "<span class = 'summa'>The first num is = $name </span><br>";
echo "<span class = 'summa'>The second num is = $name1 </span><br>";

echo "<span class = 'summa'>The total is = $summa</span>";


?>
</html>