<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Manchester</title>
</head>
<body>
<div id="container">
    <div id="header">

        <div id="header2">
            <img id="mylogo" src="manchesterlogo.png">
        </div>

    </div>
    <div id="nav">

        <div id="nav2">
            <ul>
                <li><a href="http://www.apple.com">Biznesni boshlash</a></li>
                <li><a href="#">Biznesni boshqarish</a></li>
                <li><a href="#">Learner Center</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Our Guarantee</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>

    </div>
    <div id="slideshow">
        <br>
        slideshow</div>
    <div>content</div>
</div>


<style>

    html, body{
        width: 100%;
        height: 100%;
        margin: auto;
    }

    #container{
        width: 100%;
        height: 100%;
        margin: auto;
    }

    #header{
        width:100%;
        height:93px;
        background-color: #fff;
    }

    #header2{
        margin: auto;
        width: 76%;
        height: 100px;

    }

    #mylogo{
        width: 265px;
        margin-top: 22px;
    }

    #nav{
        width:100%;
        background-color: #3a90ea;
        border-top: 1px solid #005cbf;
        border-bottom: 1px solid #005cbf;
    }

    #nav2{
        margin: auto;
        width: 76%;
        height: 29px;

    }

    #nav2 ul li{
        float: left;
        margin:5px;
        padding:5px;
        color:#fff;
        list-style: none;
    }
    #nav2 ul li a{
        text-decoration: none;
        color: #fff;
    }

    #slideshow{
        width:100%;
        height:428px;
        background-color: #797979;
        background-image: url('manchesterslideshow.jpg');
        background-repeat: no-repeat;
        background-size: 115% 100%;
    }

    .clearfix {
        overflow: auto;
    }

    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

</style>


</body>
</html>