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
<!--<div class="container-fluid">
    <h4>Assalomu alaykum!</h4>
    <hr>
    <? if (isset($_GET['msg'])): ?>
        <div class="alert alert-succes">AKA,<?= $_GET['msg'] ?></div>
    <? endif; ?>
    <form method="post" action="may20.php">
        <p>
            <label>Yoshingiz?:</label><input class="form-control" name="age" placeholder="Your age">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>-->
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


?>

</div>
</body>
</html>
