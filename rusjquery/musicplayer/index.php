<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Player</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


    <div class="container">
        <div class="top">
            <div class="menu float-r">
                <a href=""><span></span></a>
                <a href=""><span></span></a>
                <a href=""><span></span></a>




            </div>
        </div>
        <div class="side-menu">
            <a href="" class="close"><i class="fa fa-angle-left"></i></a>
            <ul>
                <li><a href="" class="side-search"><i class="fa fa-search fa-fw"></i>Search</a></li>
                <li class="active"><a href="" class="side-currently-playing"><i class="fa fa-headphones fa-fw"></i>Now Playing</a></li>
                <li><a href="" class="side-popular-music"><i class="fa fa-list-ol fa-fw"></i>Famous Music</a></li>
                <li><a href="" class="side-your-profile"><i class="fa fa-user fa-fw"></i>Take a Tour</a></li>
                <li><a href="" class="side-setting"><i class="fa fa-cog fa-fw"></i>Editing</a></li>

                
            </ul>
            <div class="side-menu-background"></div>
        </div>
        <div class="center">
            <div class="nav">
                <a href="" class="side-menu-trigger"><i class="fa fa-bars"></i></a>
            </div>
            <div class="cover">
                <div class="jcarousel">
                    <ul><img src="pic/pic1.jpg" alt=""></ul>
                </div>
            </div>
                <ul class="jcarousel-pagination"></ul>
            <div class="info">
                <div class="name">
                    <h3>The Summers</h3>
                    <p class="artist">Oratory</p>
                </div>
            </div>
        </div>
        <div class="bottom">

            <div class="action">
                <a href=""class="previous jcarousel-prev"><i class="fa fa-step-backward"></i></a>
                <a href=""class="play"><i class="fa fa-play fa-fw"></i></a>
                <a href=""class="previous jcarousel-next"><i class="fa fa-step-forward"></i></a>
            </div>
            <div class="length">
                <label for="fader">1:0</label>
                <input type="range" min="0" max="100" value="40" id="fader" step="1">
                <output for="fader" class="duration"></output>
            </div>

            <div class="options">
                <a href="" class="shuffle active"><i class="fa fa-random"></i></a>
                <a href="" class="shuffle active"><i class="fa fa-refresh"></i></a>
                <a href="" class="shuffle active"><i class="fa fa-volume-up"></i></a>
                <a href="" class="shuffle active"><i class="fa fa-heart"></i></a>
            </div>

            <div class="volume-slider">
                <a href="" class="close"><i class="fa fa-chevron-down"></i></a>
                <div class="volume-slider-inner">
                    <i class="fa fa-volume-down"></i>
                    <input class="volume-slider"
                </div>
            </div>
        </div>
    </div>















</body>
</html>