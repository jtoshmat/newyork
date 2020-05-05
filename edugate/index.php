<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery.js"></script>
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <nav class="navbar">
                <a class="right_box_table2" href="#">Register</a>
                <a class="right_box_table2" href="#">Login</a>
                <a class="left_box_table" href="#"><i class="fas fa-envelope">admin@swlabs.com</i></a>
                <a class="left_box_table" href="#"><i class="fas fa-phone-alt">+84 909 015 345</i></a>
                <a class="right_box_table" href="#"><i class="fab fa-facebook"></i></a>
                <a class="right_box_table" href="#"><i class="fab fa-google"></i></a>
                <a class="right_box_table" href="#"><i class="fab fa-twitter"></i></a>
                <a class="right_box_table" href="#"><i class="fab fa-dribbble"></i></a>
                <a class="right_box_table" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="right_box_table" href="#"><i class="fab fa-instagram"></i></a>
    </nav>
    <div id="myheader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img class="logo" src="http://wp.swlabs.co/edugate/wp-content/uploads/2015/12/logo-1.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
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
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div id="mybanner">
        scsd
    </div>
    <div id="mycontent">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
</div>

<style>
    .navbar a{
        display: inline-block;
    }
    .navbar{
        text-align: center;
    }

    .topbox{
        width: 100%;
        height: 52px;
        background-color: #07152c;
    }

    .bottombox{
        width: 100%;
        height: 140px;
        background-color: #ffffff;
    }

    .navigation{
        margin: 15px;
        text-align: right;
        color: #242c42;
    }
    .middle_box {
        background-image: url("http://wp.swlabs.co/edugate/wp-content/uploads/2016/01/banner-1.jpg");
        background-size: 100% 100%;
        width: 100%;
        height: 300px;
        background-color: red;
        color:green;
    }

    #myheader{
        z-index: 1000;
    }
    #mybanner {
        background-image: url("http://wp.swlabs.co/edugate/wp-content/uploads/2016/01/banner-1.jpg");
        background-size: 100% 100%;
        width: 100%;
        height: 300px;
        z-index: 900;
    }
</style>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>