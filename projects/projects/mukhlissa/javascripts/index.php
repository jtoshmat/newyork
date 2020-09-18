<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Javascript Class!</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container-fluid mybox">
    <h1>Welcome to Spring!</h1>

<div id="animalname" class="animalname">Vesna</div>
<img id="animalphoto" class="" src="https://i1.wp.com/metro.co.uk/wp-content/uploads/2019/03/Spring-e532.jpg?quality=90&strip=all&zoom=1&resize=540%2C358&ssl=1">

    <img id="animatedkitten" src="https://media.newyorker.com/photos/5df2b9ae81406b0008c7579b/master/pass/tny-bestshouts-2019.gif">

    <p>
    <button id="btn-dog" class="btn btn-success">DOG</button>
    <button id="btn-cat" class="btn btn-info">CAT</button>
    <button id="btn-tiger" class="btn btn-dark">TIGER</button>
    <button class="btn btn-danger">CLICK ME 4</button>
    <button class="btn btn-light">CLICK ME 5</button>
</p>

</div>
<script src="../js/feb.js"></script>

<style>
    button{
        margin:5px;
    }
    .mybox{
        text-align: center;
    }

    #animalphoto{
        width: 500px;
    }

    .animalname{
        width: 200px;
        margin: 5px;
        padding: 5px;
        background-color: #4f0000;
        opacity: 0.9;
        border-radius: 20px;
        color: #d4e4e6;
        position: relative;
        top: 50px;
        left: 91px;
        font-size: 20px;
        font-weight: 700;
    }

    .mykitten{
        border: 5px dotted red;
    }
    #animatedkitten{
        display: none;
        width: 300px;
    }
</style>
</body>
</html>