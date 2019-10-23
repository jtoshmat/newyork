<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Site</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div id="myheader">
        <img src="img/logo.png">
        <div class="mytext">
            <span>J</span>
            <span class="myo">O</span>
            <span>N</span>
            <span>T</span>
            <span class="myo">O</span>
            <span>S</span>
            <span>H</span>
            <span>M</span>
            <span>A</span>
            <span>T</span>
            <span class="myo">O</span>
            <span>V</span>
        </div>
    </div>
    <div>
        <ul class="mynav nav nav-fill">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="index.php">Order</a></li>
            <li class="nav-item"><a href="index.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="myslideshow">
        Slideshow
    </div>

</div>

<style>

    a{
        color: white;
    }

    a:visited{
        background-color: #3a90ea;
    }

    a:hover{
        background-color: #8adc2c;
    }

    #myslideshow{
        height:400px;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT84gNjg8MVsBsK5lA-UwuFpltqr_LNiN00hcyj0tp_j0H6Cbne");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .mynav{
        background-color: #4d2526;
        color: #ffe553;
    }

    .myo{
        color: white;
        box-shadow: #010204 5px 5px 5px;
    }

    .mytext{
        float: left;
    }

    #myheader{
        width:100%;
        height: 100px;
        background-color: #3a90ea;
    }

    #myheader img{
        width:150px;
        float: left;
    }

    #myheader div{
        font-size: 40px;
        color: #590000;
    }


</style>

</body>
</html>