<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
$city = $_GET['city']??'New York';
switch ($city){
    case 'New York':
        $img = 'https://cdn.getyourguide.com/img/tour_img-1667715-146.jpg';
        break;
    case 'Los Angeles':
        $img = 'https://www.ef.com/sitecore/__/~/media/universal/pg/8x5/destination/US_US-CA_LAX_1.jpg';
        break;
    case 'Miami':
        $img = 'https://blog-www.pods.com/wp-content/uploads/2019/08/MG_6_1_Miami.jpg';
        break;
    default:
        $img = 'https://cdn.getyourguide.com/img/tour_img-1667715-146.jpg';
        break;
}
//https://www.ef.com/sitecore/__/~/media/universal/pg/8x5/destination/US_US-CA_LAX_1.jpg
//https://blog-www.pods.com/wp-content/uploads/2019/08/MG_6_1_Miami.jpg
//https://cdn.getyourguide.com/img/tour_img-1667715-146.jpg
?>
<div class="container-fluid">
    <h3>Tourists Center</h3>
    <nav>
        <a href="index.php?city=Los Angeles">Los Angeles</a> |
        <a href="index.php?city=New York">New York</a> |
        <a href="index.php?city=Miami">Miami</a>
    </nav>
    <div class="images">
        <img src="<?=$img?>">
    </div>
</div>
<style>
    .images img{
        width: 100%;
        margin-bottom: 50px;
    }

    .images{
        width: 700px;
        margin: auto;
    }
    .container-fluid{
        background-color: whitesmoke;
        text-align: center;
        width: 80%;
        margin: 50px auto;
    }
    body{
        background-color: #2d6498;
    }
</style>
</body>
</html>