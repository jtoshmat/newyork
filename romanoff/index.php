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
<?php

$number = (int) $_GET['number']??1;

$img = 'https://wp-assets.futurism.com/2014/08/distance-to-moon-with-planets1-1024x576-1.jpg';

if ($number==1){
    $img = 'https://wp-assets.futurism.com/2014/08/distance-to-moon-with-planets1-1024x576-1.jpg';
}
if ($number==2){
    $img = 'https://live.mrf.io/statics/i/ps/cdn.zmescience.com/wp-content/uploads/2018/06/Earth-moon-distance-384400km.jpg?width=1200&enable=upscale';
}
if ($number==3){
    $img = 'https://www.purdue.edu/uns/images/2019/cislunar-graphic.jpg';
}



?>

<h3>I love planets</h3>
<nav>
    <a href="index.php?number=1"> Distance between planets</a> |
    <a href="index.php?number=2"> Distance earth and moon</a> |
    <a href="index.php?number=3"> Trajectory of the moon</a>
</nav>
<hr>
<img class="myimages" src="<?=$img?>">
<hr>

<style>
    body{
        text-align: center;
        background-color: darkgreen;
    }
    .myimages{
        width: 660px;
        height: 350px;
        border: 5px solid #820951;
        box-shadow: #3c2626 5px 5px 5px 5px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    a{
        color: whitesmoke;
        margin-bottom: 10px;
        text-decoration: none;
        padding:5px;
    }
</style>

</body>
</html>
