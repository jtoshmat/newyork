<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I love JQuery</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="thursday.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    <h3 style="text-align: center">I love JQuery!</h3>


    <div class="mybox">
        <div class="commercial">
            BUY ONE GET ONE FREE
        </div>
        <img class="myimg" src="https://i.pinimg.com/originals/e3/01/33/e30133ef786dc504125fe04d099ad985.jpg">
    </div>

    <div class="myemptybox"></div>

    <div class="mybuttons">
        <button id="florida" class="btn btn-primary">Florida</button>
        <button id="uzbekistan" class="btn btn-danger">Uzbekistan</button>
        <button id="italy" class="btn btn-dark">Italy</button>
    </div>

</div>


<style>

    .commercial{
        width: 300px;
        height: 50px;
        background-color: yellow;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        position: absolute;
        z-index:1000;
        top: 150px;
    }

    .myemptybox{
        height: 17px;
    }

    .mybuttons{
        width: 300px;
        margin: auto;
        text-align: center;
    }


    .mybox{
        background-color: #86cfda;
        width:300px;
        height: 300px;
        border: 1px solid #000;
        border-radius: 15px;
        margin: auto;
    }

    .mybox img{
        width: 100%;
        height: 200px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }


</style>


</body>
</html>