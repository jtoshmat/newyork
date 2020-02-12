<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<table class="table table-bordered">
    <tr>
    </tr>
</table>
</body>
</html>
<?php

//This is task #3

$vars = range(1,81);

$num = 0;

    foreach($vars as $var) {

            $num++;
            if($var%10 ==0){
                echo "<span class='ten all'>$num</span>";
            }elseif($var%7 ==0){
                echo "<span class='seven all'>$num</span>";
            }else{
                echo "<span class='else all'>$num</span>";
            }
        }
    ?>

<style>

    .all {
        width: 50px;
        height: 50px;
        padding: 10px;
        margin: 5px;
        float: left;
        text-align: center;
        font-weight: bold;
        color: white;
        border: 1px solid black;
        border-radius: 50%;
    }
    .seven {
        background-color: #0e345b;
    }
    .ten {
        background-color: #0e661a;
    }
    .else {
        background-color: #960000;
    }

</style>


