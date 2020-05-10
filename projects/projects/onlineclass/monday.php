<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    <div id="mybox">
        My BOX
    </div>
    <div id="buttons">
        <button class="btn btn-primary" id="btnleft">Left</button>
        <button class="btn btn-danger" id="btnright">Right</button>
    </div>
</div>

<style>

    #buttons{
        position: relative;
        bottom: -200px;
    }

    .container{
        text-align: center;
        border:1px solid #e23f82;
    }

    #mybox{
        width:300px;
        height:300px;
        background-color: #0f6674;
        margin: auto;
        position: relative;
        border:1px solid #00e200;
    }

    body{
        background-color: #0c5460;
    }

</style>

<script>

    $(function () {
        $("#btnright").click(function(){
            //$("#mybox").css("color", "red").slideUp(3000).slideDown(2000).animate({left: "-100%"});
            $('div').css("color", "pink").slideUp(3000).slideDown(2000).animate({left: "-100%"});
            $('.container').css("color", "pink").slideUp(0).slideDown(500).animate({left: "100%"});
        });
        $("#btnleft").click(function(){
            $("#mybox").animate({top: "250px"});
            $("#mybox").animate({left: "-100%"});
            $("#mybox").animate({left: "0%"});
            $("#mybox").animate({top: "0"});
            $("#mybox").animate({top: "200px"});
        });
    });


</script>

</body>
</html>