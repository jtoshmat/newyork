<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
    <script src="../../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
include "back11.php";

?>
<nav>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://www.liveturkey.com/museums/">The whole universe appears like a palm</a>

            <form class="form-inline my-2 my-lg-0" method="get">
                <?php if(isset($city)): ?>
                <input name="country" value="<?=$city?>" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <?endif;?>
            </form>
        </div>
    </nav>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="https://www.google.com/search?q=new+york&sxsrf=ALeKk01UZKELH0mlLGzRjVJ2TdrD74Knhg:1591930638255&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjJxMzho_vpAhVhQzABHbOyCgoQ_AUoA3oECCIQBQ&biw=726&bih=724" data-slide-to="0" class="active"></li>
        <li data-target="https://www.google.com/search?q=dubai&sxsrf=ALeKk01B6ZJtC6q_wSZWnXQfBzwv0DWJtA:1591930677737&source=lnms&tbm=isch&sa=X&ved=2ahUKEwinwbb0o_vpAhUSQzABHbBcDhkQ_AUoAnoECDEQBA&biw=726&bih=724#imgrc=jJh6nT4rjbZEmM" data-slide-to="1"></li>
        <li data-target="https://www.google.com/search?q=parij&sxsrf=ALeKk00MaeYLng3wlbRfoFe7qifYT8f98w:1591930506953&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiYyv6io_vpAhWRSzABHUfACCUQ_AUoAnoECCIQBA&cshid=1591930703557827&biw=726&bih=724#imgrc=3Tr9MzEb24PLkM" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://cdn.cheapism.com/images/Where_You_Live_or_Work.2e16d0ba.fill-1440x605.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://img.fonwall.ru/o/61/fonwall_ru_eyfeleva_bashnya_parij_osen_trava_derevya_listya_lyudi_park_gorod_ComputerDesktopWallpapersCollection421_003.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.arabianbusiness.com/public/styles/full_img/public/images/2020/04/24/dubai-skyline.jpg?itok=CZ2kmogQ" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<table class="table table-bordered">
    <tr class="city"><td>City: </td><td><?=$city[0]->city?></td></tr>
    <tr><td>state: </td><td><?=$city[0]->state?></td></tr>
    <tr><td>country: </td><td><?=$city[0]->country?></td></tr>

</table>



<style>
    .city{
       background-color: #0c6251;
        color: whitesmoke;
    }
    .navbar-brand{
        font-weight: bolder;
    }

</style>
<script>
</script>

</body>
</html>
