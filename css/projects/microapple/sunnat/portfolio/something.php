<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<?php
require_once 'database.php';
$db = new \Database\database();
$items = $db->sql("SELECT * FROM world_news order by id limit 4;");
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Members Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="Sunnatnyc@icloud.com">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="America2020">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="mynavbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">BUKHARA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

    </div>
    <div class="mycarousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSUBtq-E_D7cZ_IzbTsFEm8CrqGkKmzSQdU7m_6gL2MMdJoc0mg&usqp=CAU" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.viaconsulting.co/wp-content/uploads/2018/03/via-consulting_website_gorsel_770x480_teknoloji-770x430.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://5.imimg.com/data5/PM/DW/MY-15219773/information-technology-services-500x500.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="myjumbotron">
        <div class="jumbotron">
            <h1 class="display-4">WELCOME TO BUKHARA</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="mycards">
        <div class="card" style="width: 18rem;">
            <img src="https://media-exp1.licdn.com/dms/image/C4E1BAQE3BqFBucUmqQ/company-background_10000/0?e=2159024400&v=beta&t=gxXOxmMiG4hbFtC0kegwBnh9xLacYr5Ssi83WFYRTfU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://pagedesignweb.com/wp-content/uploads/2018/07/Information-Technology-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSRiNMEEbtK5IxHfh8S37hPEL1iNie1TEJzXiPi3KkA66cQzH5Q&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="myaccordion">
        <div class="accordion" id="accordionExample">
            <?foreach ($items as $id=>$item):?>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?=$id?>" aria-expanded="true" aria-controls="collapse<?=$id?>">
                                <?=$item['source_name']?>
                            </button>
                        </h2>
                    </div>

                    <div id="collapse<?=$id?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <img class="news_icons" src="<?=$item['urlToImage']?>">
                            <p>
                            <h4><?=$item['title']?></h4>
                            <hr>
                            <h6><?=$item['description']?></h6>
                            </p>
                        </div>
                    </div>
                </div>
            <?endforeach?>

        </div>
    </div>
</div>
<script src="/js/bootstrap.min.js"></script>
<style>
    .news_icons{
        width:100px;
        height: 100px;
        border-radius: 50%;
        border: 1px solid darkgreen;
    }
    .myaccordion{
        text-align: center;
    }
    .card-img-top{
        height: 300px;
    }
    .card{
        display: inline-block;
    }
    .mycards{
        width: 100%;
        margin: auto;
        text-align: center;
    }
    .modal-header{
        background-color: #113068;
        color: #ffe24c;
    }
    .mycarousel{
        border-top: 15px solid darkred;
        border-bottom: 15px solid darkred;
    }
    .w-100{
        width: 100%;
        height: 450px;
    }
    .container-fluid{
        background-color: whitesmoke;
        margin: auto;
    }

</style>
</body>
</html>
