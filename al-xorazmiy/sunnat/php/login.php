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
<?php
$city = $_GET['city']??'New York';
switch ($city){
    case 'New York':
    $img = "https://cdn.cheapism.com/images/Where_You_Live_or_Work.2e16d0ba.fill-1440x605.png";
    break;
    case 'Los Angeles':
        $img = "https://static01.nyt.com/images/2020/05/16/us/politics/16lafire-4/merlin_172572198_18070ad1-3406-4118-909a-0f48ea4a9c45-mobileMasterAt3x.jpg";
        break;
    case 'Miami':
        $img = "https://www.outfrontmedia.com/-/media/images/ofm/markets/miami/miami-hero.ashx";
        break;
    default:
        $img = "https://cdn.cheapism.com/images/Where_You_Live_or_Work.2e16d0ba.fill-1440x605.png";
        break;
}



?>
<div class="container-fluid">
    <h2>MY DREAM CITY</h2>
    <nav>
        <a href="login.php?city=Los Angeles">Los Angeles</a>
        <a href="login.php?city=New York">New York</a>
        <a href="login.php?city=Miami">Miami</a>
    </nav>
    <img src="<?=$img?>">
</div>




</body>
</html>
