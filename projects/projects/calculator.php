<!DOCTYPE html>
<html>
<head>
    <title>Jon Toshmatovni calculatori</title>
</head>

<body>
<?php
    include_once 'inc/header.php';
?>
<div id="calculator">

    <table class="calculator">

        <tr>
            <td colspan="4" class="display">78</td>
        </tr>

        <tr>
            <td>AC</td>
            <td>+/-</td>
            <td>%</td>
            <td class="otd">&divide;</td>
        </tr>

        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td class="otd">&times;</td>
        </tr>

        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td class="otd">-</td>
        </tr>

        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td class="otd">+</td>
        </tr>

        <tr>
            <td colspan="2">0</td>
            <td>.</td>
            <td class="otd">=</td>
        </tr>


    </table>

</div>
<style>

    .calculator{
        width: 237px;
        height: 326px;
        border: 1px solid #5c5c5c;

    }

    table td{
        background-color: #d7d7d7;
        font-size: 24px;
        text-align: center;
        border:1px solid #000;
        margin:0px;
    }

    .display{
        background-color: #934a29;
        text-align: right;
        color: #fff;
        font-size:30px;
        padding-right: 10px;
    }

    .otd{
        background-color: #fa9955;
        color: #fff;
    }


</style>

</body>
</html>