<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/../css/bootstrap.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
include "backendmma.php";
?>
<div class="container-fluid">
    <h2 style="text-align: center; color: blue;"> WELCOME TO MMA NEWS !</h2>
 <!--   <form method="get">
        <div class="input-group mb-3">
            <input name="mma" value="<?=$news?>"  type="text" class="form-control" placeholder="Fighter's name" aria-label="Fighter's name" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>-->

  <!--  <table class="table table-bordered">
        <tr><td>Title: </td><td><?=$News->latestNews[1]->title?></td></tr>
        <tr><td>description: </td><td><?=$News->latestNews[1]->description?></td></tr>
        <tr><td>imgUrl: </td><td><?=$News->latestNews[1]->imgUrl?></td></tr>
        <tr><td>thumbnail: </td><td><?=$News->latestNews[1]->thumbnail?></td></tr>
        <tr><td>sourceUrl: </td><td><?=$News->latestNews[1]->sourceUrl?></td></tr>
        <tr><td>publishedAt: </td><td><?=$News->latestNews[1]->publishedAt?></td></tr>
        <tr><td>author: </td><td><?=$News->latestNews[1]->author?></td></tr>
    </table>-->
  <!--  <?php
    echo "<pre>";
    print_r($News);
    echo "<pre>";
    ?> -->
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://mmasucka.com/wp-content/uploads/2019/12/promo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://im.tiscali.cz/fights/2019/12/06/1121719-makhmud-muradov-653x367.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://talksport.com/wp-content/uploads/sites/5/2019/09/NINTCHDBPICT000439636876-e1567439711134.jpg?strip=all&w=960&quality=100" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="mycards">
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[0]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[0]->description?></h5>
                <a href="<?=$News->latestNews[0]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[1]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[1]->description?></h5>
                <a href="<?=$News->latestNews[1]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[2]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[2]->description?></h5>
                <a href="<?=$News->latestNews[2]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[3]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[3]->description?></h5>
                <a href="<?=$News->latestNews[3]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[4]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[4]->description?></h5>
                <a href="<?=$News->latestNews[4]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[5]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[5]->description?></h5>
                <a href="<?=$News->latestNews[5]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[6]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[6]->description?></h5>
                <a href="<?=$News->latestNews[6]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="<?=$News->latestNews[7]->imgUrl?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$News->latestNews[7]->description?></h5>
                <a href="<?=$News->latestNews[7]->sourceUrl?>" class="btn btn-primary">More details</a>
            </div>
        </div>

    </div>
</div>
<style>
    .container{
        width:100%;
    }
    .d-block{
        width: 100%;
        height: 400px;
        margin-bottom: 20px;
    }
    *{
        padding: 0;
        margin: 0;
    }
    html, body{
        width: 100%;
        height: 100%;
    }
    .mycards{
        width: 100%;
        height: 300px;
        margin: auto;
        background-color: white;
    }
    .card{

        display: inline-flex;
        margin: 0px 28px 10px 28px;

    }
    .card-img-top{
        width: 100%;
        height: 200px;
    }
</style>
<script src="/../js/jquery.min.js"> </script>
<script src="/../js/bootstrap.min.js"></script>
</body>
</html>
