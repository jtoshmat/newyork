<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uzb-USA Travel Agency</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <div class="topdiv">
        Top DIV
    </div>

    <div class="middlediv">
        <div style="height: 30px;"></div>
        <div class="searchbox">

            <div class="mtop">
                <div class="mysmallbox">
                <img src="https://webstockreview.net/images/clipart-plane-icon-5.png">
                </div>
                <div class="mysmallbox">Box 2</div>
                <div class="mysmallbox">Box 3</div>
                <div class="mysmallbox">Box 4</div>
                <div class="mysmallbox">Box 5</div>
                <div class="mysmallbox">Box 6</div>
                <div class="mysmallbox">Box 7</div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="myform">
                <div class="myform2">
                    <input name="from">
                    <input name="to">
                </div>
            </div>


        </div>

    </div>

    <div class="bottomdiv">
        <div class="container1 bottomcontainer">
            <img src="../img/pin.svg">
        </div>
        <div class="container2 bottomcontainer">
            <p>Unlock up to 42% off select hotels when you book a flight on Expedia</p>
            <p>Your discount lasts until your trip starts</p>
        </div>
        <div class="container3 bottomcontainer">
            <img src="../img/illustration-v2.svg">
        </div>
    </div>

</div>

<style>

    .myform2 input{
        padding: 5px;
        margin: 5px;
        border-radius: 5px;
        width: 330px;
        height: 41px;
        background-color: white !important;
    }


.myform2{
    display: flex;
}

    .mysmallbox img{
        width: 80%;
    }

    .mysmallbox:hover{
        background-color: #438aff;
        cursor: pointer;
    }

    .mysmallbox{
        text-align: center;
        width: 69px;
        height: 64px;
        background-color: #212529;
        float: left;
        margin: 10px;
        border-radius: 5px;
        border: 1px solid black;
        color: white;
        padding:5px;
    }
    .bottomcontainer p:first-child{
        margin:10px;
        font-size: 20px;
        font-weight: bolder;
    }

    .bottomcontainer p:last-child{
        font-size: 20px;
    }

    .container1 img{
        width: 56px;
    }
    .container1{
        width: 10%;
        text-align: right;
    }
    .container2{
        width: 40%;
    }
    .container3{
        width: 40%;
    }

    .bottomcontainer{
        float: left;
        margin-top: 20px;
    }

    .searchbox{
        width: 95%;
        height: 432px;
        background-color: black;
        margin: auto;
        border-radius: 10px;
        opacity: 0.7;
    }

    .topdiv{
        width: 100%;
        height: 92px;
        background-color: #e4c434;
        border-bottom: 1px solid #483c3c;
    }

    .middlediv{
        width: 100%;
        height: 550px;
        background-color: #000000;
        background-image: url("../img/imgad.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;

    }

    .bottomdiv{
        width: 100%;
        height: 150px;
        background-color: #ffffff;
    }
    body{
        background-color: #f8f8f8;
    }
</style>

</body>
</html>