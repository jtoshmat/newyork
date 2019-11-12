<?php
$parms = $_REQUEST;

var_dump($parms);
exit;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monday</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div class="myad">
    <div class="topdiv">

        <p><img src="img/myheader.png"></p>

    </div>
    <div class="bottomdiv">
        <div class="bottomleftdiv">
            <img src="img/girlimg.png">
        </div>
        <div class="bottomrightdiv">
            <img src="img/medicinimg.png">
        </div>
    </div>
    </div>
</div>


<style>
    .topdiv img{
        width: 54%;
    }
    .bottomrightdiv img{
        width: 100%;
        height:620px;
    }
    .topdiv p{
        text-align: center;
        font-size: 50px;
    }
    .topdiv span:first-child{
        color:black;
    }
    .topdiv span:nth-child(2){
        color: #45953a;
    }
    .bottomleftdiv img{
        width: 100%;
    }
    .bottomrightdiv{
        float: right;
        width: 34%;
        height: 100%;

    }

    .bottomleftdiv{
        float: left;
        width: 66%;
        height: 100%;
    }

    .topdiv{
        height:94px;
    }
    .myad{
        width:970px;
        height:710px;
        margin: auto;

    }
</style>
</body>
</html>