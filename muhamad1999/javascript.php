<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Javascript World!</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="myscript.js" type="text/javascript"></script>
</head>
<body>

<h4 style="text-align: center">Welcome to my Javascript World!</h4>
<div class="container">
    <div class="rightmenu">Jon is a great person and he plays tennis in his free time and he also loves animals</div>
    <div class="names">Jon Toshmatov</div>
    <img class="myimg" src="/img/jontosh.png">
    <hr>
    <button class="btn btn-primary btn-jessica">Jessica</button>
    <button class="btn btn-primary btn-alex">Alex</button>
    <button class="btn btn-primary btn-sarah">Sarah</button>
    <button class="btn btn-primary btn-jon">Jon</button>
</div>



<style>

    .rightmenu{
        padding:30px;
        width:200px;
        height: 70%;
        position: absolute;
        top: 0px;
        left:80%;
        z-index: 1000;
        text-align: left;
    }

    .names{
        background-color: #86cfda;
        width: 40%;
        position: relative;
        top:200px;
        left: 132px;
        border-radius: 10px;
        color: #1c426e;
        font-size: 15px;
        font-family: "American Typewriter";

    }

    .container{
        width: 60%;
        height: 60%;
        text-align: center;
    }
    .container img{
        width: 60%;
        height:230px;
        border-radius: 50%;
        border:2px double #000;
        z-index: 0;
    }
</style>


</body>
</html>