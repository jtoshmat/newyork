<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Collections</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php

drive('BMW');
stop('BMW');




function drive($car){
    echo $car . " is driving now <br>";

    if ($car == 'Mercedec'){
        echo "Oh Wow, $car is my favorite vehicle";
    }

    echo "<hr>";
}


function stop($car){
    echo "$car is coming to stop <hr>";
}





?>

<style>

    .divided_by_three{
        background-color: #9d213c;
        color: #d8f3ff;
        margin:3px;
        padding: 5px;
        border:1px solid #cbdfae;
        border-radius: 30px;
        box-shadow: #3a90ea 5px 5px 5px 5px;
        font-size: 32px;
    }

    .odd_numbers{
        background-color: yellow;
        color:red;
        margin:3px;
        padding: 5px;
        border:1px solid black;
        border-radius: 30px;
        box-shadow: #3a90ea 5px 5px 5px 5px;
        font-size: 32px;
    }

    .even_numbers{
        background-color: #55df4e;
        color: #fffc82;
        margin:3px;
        padding: 5px;
        border:1px solid black;
        border-radius: 30px;
        box-shadow: #3a90ea 5px 5px 5px 5px;
        font-size: 32px;
    }
</style>


</body>
</html>