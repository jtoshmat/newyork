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
</head>
<body>

<img id="car" src="https://i.pinimg.com/originals/70/63/d9/7063d9a730bbe5ddf084fa1f00f3199d.png">
<hr>
<p style="text-align: center">
    <button class="btn btn-success" id="drive">Drive</button>

    <button class="btn btn-danger" id="backup">Back Up</button>

    <button class="btn btn-info" id="park">Park</button>
</p>

<div id="results">

</div>


<script>
    $(function () {
        $("#drive").click(function () {
            drive('forward');
        });
        $("#park").click(function () {
            alert("Park is working");
        });
        $("#backup").click(function () {
            drive('reverse');
        });
    });

    $("body").keydown(function (e) {
        if (e.which == 37){
            drive('forward');
        }

        if (e.which == 39){
            drive('reverse');
        }
        e.preventDefault();
    });

    
    function drive(dir) {
        var pos = $("#car").position();
        var f = pos.left - 500;
        var r = pos.left + 500;


        if (dir=='forward'){
            $("#car").animate({left: f+'px'});
        }

        if (dir=='reverse'){
            $("#car").animate({left: r+'px'});
        }
        return false;
    }
    
    function park() {

    }
    
    function backup() {

    }

</script>

<style>
    #car{
        position: absolute;
        left: 0;
        top: 110px;
    }
</style>

</body>
</html>