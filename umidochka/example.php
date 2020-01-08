<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>

<h1>Learning JQuery!</h1>
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<img class="img" src="umida.jpg" width="120px" height="90%">
<br>
<button id="hide">Hide</button>
<button id="show">Show</button>

<div id="flip">Click to slide down panel</div>
<div id="panel"><img src="mishka.jpg" width="120px" height="90%"></div>

<button id="button1">Start Animation</button>
<div id="box">Ku-ku</div>

<button id="click">Click it</button>
<div id="box2">Hehehe</div>

<img id="box3" src="umida.jpg">

<button id="mybutton">Click me</button>
<img id="box4" src="wbw.png">

<style>
    #box4{
        height: 100px;
        width: 100px;
        position: absolute;
    }

    #box3{
        width: 140px;
        height: 140px;
        background-color: #00aa88;
        position: relative;
    }

    #box2{
        background-color: #2a87d0;
        width: 120px;
        height: 90px;
        position: relative;
    }

    #box{
        width: 120px;
        height: 90px;
        background-color: #f5c6cb;
        border-radius: 50px;
        position: relative;

    }
    #panel, #flip{
        padding: 5px;
        text-align: center;
        background-color: #d44950;
        border: solid 1px #0f2e41;
    }

    #panel{
        padding: 40px;
        display: none;
    }

</style>

<script>
    $(document).ready(function() {
        $("#button1").click(function () {
            $("#box").animate({left: '250px'});
        });

        $("#hide").click(function () {
            $(".img").fadeOut(2000);
        });

        $("#show").click(function () {
            $(".img").fadeIn(3000);
        });

        $("#flip").mouseleave(function () {
            $("#panel").slideDown("slow");
        });

        $("#click").mouseover(function () {
            $("#box2").animate({
                left: '250px',
                height: '150px',
                width: '150px'
            });
         $("#box3") .dblclick(function () {
             $("#box3").animate({
                 left: '250px',
                 height: '+=150px',
                 width: '+=150px'
             });
        $("#mybutton").click(function(){
            $("#box4").animate({
                height: 'toggle'
            });
          });
        });
    });

</script>



</body>
</html>
