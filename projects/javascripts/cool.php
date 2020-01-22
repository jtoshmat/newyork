<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I LOVE JAVASCRIPTS!</title>
    <script src="jquery-3.4.1.js" type="text/javascript"></script>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="box" id="box1">BOX 1</div>
<div class="box" id="box2">BOX 2</div>
<div class="box" id="box3">BOX 3</div>
<div class="clearfix"></div>
<hr>
<div style="text-align: center">
    <button id="btnreset">RESET</button>
</div>
<hr>
<style>


    .box:nth-child(2){
        background-color: #919da9;
    }

    .box:nth-child(3){
        background-color: #3c5193;
    }

    .box:nth-child(1):hover{
        background-color: #d6ba12;
    }

    .box:nth-child(2):hover{
        background-color: #a9194c;
    }

    .box:nth-child(3):hover{
        background-color: #38935d;
    }




    .box{
        background-color: #934a29;
        width: 200px;
        border:1px solid #005cbf;
        height: 150px;
        float: left;
        margin:10px;
        cursor: pointer;
    }






</style>
<script src="cool.js"></script>
</body>
</html>