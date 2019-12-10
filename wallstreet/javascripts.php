<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to My Javascript World!</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div id="mybox">
    <div class="mytext">

        <img src="../img/background-plane.jpg">

    </div>
    <hr>
    <button id="hideboxbutton">HIDE THE TEXT</button>
</div>


<style>
    #mybox{
        width:300px;
        height: 300px;
        background-color: #e90007;
        margin: auto;
        text-align: center;
    }

    .mytext{
        background-color: #9ae9ff;
    }

    .mytext img{
        width:300px;
    }
</style>


<script>
    $(function () {

        $("#hideboxbutton").click(function () {
            $( ".mytext" ).slideUp( 20000 ).delay( 20000 ).fadeIn( 20000 );


        });


    });
</script>
</body>
</html>
