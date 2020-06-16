<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"href="/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <h1>Welcome to my city!</h1>


    <nav>
        <a href="switch.php?city=Tashkent">Tashkent</a>
        <a href="switch.php?city=Dallas">Dallas</a>
        <a href="switch.php?city=Miami">Miami</a>
    </nav>


<?php
$city = $_GET['city']??'Tashkent';
switch ($city) {

    case "Tashkent";
        $img = "https://kalpak-travel.com/wp-content/uploads/2019/04/tashkent.jpg";
        break;

    case "Dallas";
       $img = "https://blog.buckitdream.com/wp-content/uploads/2017/11/dallas-img.jpg";
        break;

    case "Miami";
        $img = "https://www.casino.org/news/wp-content/uploads/2017/05/miamibeach.jpeg";
        break;

    default;
        $img = "https://static.boredpanda.com/blog/wp-content/uploads/2017/06/593807d32171f_RHlUtt8__880.jpg";
        break;

}
?>

    <div class="images">
        <img  src="<?=$img?>">


    </div>
   </div>

<style>

    .container-fluid{
        text-align: center;
    }
    h1{
        color: #0f6674;
    }


</style>


</body>
</html>