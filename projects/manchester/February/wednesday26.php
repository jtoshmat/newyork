<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>Oddiy Function</h4><br>
<img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Composite_Function_Box.PNG">
<br>
<?php


function amazon($whatYouWant, $items, $when='today'){
    //what do you want to do?
    //sell or buy
    if ($whatYouWant == 'sell'){
        echo "<br>1) Oh so, you want to sell, and what do you want to sell?<br>";
    }else if ($whatYouWant == 'buy'){
        echo "<br>1) You want to buy $items huh?<br>";
    }else{
        echo "<br>I am not sure if we do what you want<br>";
    }

    if ($items == 'fruites'){
        echo "<br>2) Oh wonderful, we do sell fruite here locally in Amazon stores<br>";
    }

    if ($items == 'cars'){
        echo "<br>2) You like Audi?, ready to by $when <br>";
    }

}




amazon('buy','fruites');
echo "<hr>";

amazon('sell','cars','tomorrow');
echo "<hr>";

?>

</body>
</html>
