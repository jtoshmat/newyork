<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="yourwrapper">
            <img class="logo" src="https://rdv.ellebelle.ch/wp-content/uploads/2019/04/ellebelle-logo-menu-1.png">
        <div class="menubuttons">
            <ul>

                <li><a href="#">About</a></li>
                <li><a href="#">Rates</a></li>
                <li><a href="#">HairStyles</a>
                    <ul class="child_menu">
                        <li><a href="#">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                        <li><a href="#">Four</a></li>
                    </ul>
                </li>
                <li><a href="#">Makeup</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Home</a></li>
            </ul>
        </div>

        <div class="clearfix"></div>

        <div class="myslides">
            <div style="height: 239px"></div>
            <div class="middle_text">
                <h1 style="text-align: center;">Mobile Beauty Studio in DMV</h1>
                <h3 style="text-align: center">Hair and Makeup Services at Your Place for Your Convenience</h3>
            </div>
            <div class="bottom_buttons">
                <button>Learn More</button>
                <button>Request Free Phone Consultation</button>
            </div>
        </div>





    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 style="text-align: center;color:mediumpurple">Hair Styling</h2>
                <h4 style="text-align: center">Professional Hair Stylist Services for Fashion, Photography, Bridal,
                    Entertainment, and Special Events</h4>
                <h4 style="text-align: center">State Licensed, trained by Famous European Hair Artist Georgy Kot</h4>
            </div>
            <div class="col-sm">
                <h2 style="text-align: center;color:mediumpurple">Makeup</h2>
                <h4 style="text-align: center">High Quality Makeup Services from Natural Makeup to HD or Smokey</h4>
                <h4 style="text-align: center">State Licensed, trained by Famous European Makeup Artist Goar
                    Avertisyan</h4>

            </div>
        </div>





    </div>
    <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators>
        <li class="data-target="mycarousel" data-slide-to="0"class="active"></ol>
        <li class="data-target="mycarousel" data-slide-to="1"></li>
        <li class="data-target="mycarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="item active">
        <img src="../img/updo1.jpg">
        </div>
        <div class="item">
        <img src="../img/updo2.jpg">
        </div>
        <div class="item">
        <img src="../img/updo3.jpg">
        </div>
        <div class="item"
        <img src="../img/updo4.jpg"
        </div>

        </div>
    </div>
</div>
<style>
    body{
        background-image: url("../img/bg.jpg");
    }

    .menubuttons ul li:hover > ul {
        display: block;
    }
    .child_menu{
        left: -60px;
        top: 36px;
        z-index: 1000;
        position: absolute;
        text-align: center;
        display: none;
    }
    .child_menu li{
        margin-bottom: 2px;
        padding: 0px;
    }

    .menubuttons ul{
        list-style: none;
    }
    .menubuttons ul li{
        float: right;
        margin-right: 5px;
        border: 1px solid #a08052;
        padding:5px;
        width: 80px;
        text-align: center;
        background-color: #43a09f;
        border-radius: 10px;
        position: relative;
        left: 11px;

    }
    .menubuttons ul li a{
        color: white;
        text-decoration: none;
    }

    .menubuttons ul li:hover{
        background-color: #a08052;
        cursor: pointer;
        color:#43a09f;
    }

    .middle_text{
        color: #77124d;
        text-shadow: 2px 2px #ddd9d5;

    }

    .logo{
        width: 200px;
        margin: 20px;
        float: left;
    }

    .myslides{
        background-color: red;
        height: 400px;
        background-image: url("../img/belleforelle1.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border-top: 5px solid #6b1a49;
        border-bottom: 5px solid #6b1a49;
        margin-bottom: 20px;
    }

    .col-sm {
        border: 1px solid #d3cbc2;
        height: auto;
        margin-right: 5px;
        background-color: #e1d9d7;
        box-shadow: #c4cfe2 5px 5px 5px 5px;
        margin: 20px;
        padding: 10px;
    }

    .container-fluid {
        margin: 0px;
        padding: 0px;
    }

    .bottom_buttons {
        text-align: center;
    }
    .bottom_buttons button {
        background-color: #504b30;
        border-radius: 5px;
        border: 1px inset #98b7b5;
        color: white;
        padding: 8px;
    }

    .bottom_buttons button:hover{
        background-color: #746f4d;
        color: #ffce7f;
    }

    .menubuttons {
        text-align: center;
        float: right;
        width: 550px;
        margin: 20px;

    }


    button:hover {
        color: purple;
        cursor: pointer;
    }




</style>
</body>
</html>