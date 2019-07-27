<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business Card</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="businesscard">


        <div class="leftcol">
            <img class="myphoto" src="/img/jon.jpeg">
        </div>

        <div class="rightcol">

            <div class="rightcol_child">
                <p><img class="mylogo" src="/img/century.png"></p>
                <p class="full_name">Working on</p>
                <p>jsdhcvsdjkhcbskhjdc
                </p>

            </div>


        </div>


    </div>

</div>


<style>

    .mylogo{
        width: 250px;
    }

    .rightcol_child{
        width:76%;
        margin: auto;
        margin-left: 90px;
        color:black;
    }

    .myphoto{
        width:160px;
        height:174px;
        border:5px solid #000;
        position: relative;
        z-index: 1000;
        top:26%;
        left:31%;
    }

    .leftcol{
        background-color: #d7b950;
        width:20%;
        float: left;
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        height: 100%;
        border-right: 5px solid #000;
    }

    .rightcol{
        background-color: white;
        width:80%;
        float: left;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        height: 100%;
    }

    body{
        background-color: #1b1e21;
        color:white;
    }

    .businesscard{
        width:600px;
        height:400px;
        margin: auto;
        position: relative;
        margin-top: 20%;
        border-radius: 30px;
    }


</style>

</body>
</html>