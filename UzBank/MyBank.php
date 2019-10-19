<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBank</title>
    <link rel="stylesheet" href=../css/bootstrap.css>
    <script src=../js/jquery-3.4.1.min.js type="text/javascript"></script>
</head>

<body>
<div class="container-fluid">start server

    <div class="emptydiv"></div>
    <div class="Mylogin">
        <div class="mylogo"><img src=img/Chase-Bank-Logos.png></div>
        <div class="myloginform">
            <form method="post">
                <p class="myp">
                    <label>Enter your card number</label><br>
                    <span class="cardlogo"><img id="cardlogo" src="img/TDB_white_tcm371-253851.png"></span>
                    <input id="enter your card number">

                </p>
                <p class="myp">
                    <span class="cardlogo"><img src="img/lock_icon.png"></span>
                    <input pattern="\d*" minlength="4" maxlength="4" name="pin" type="password" placeholder="PIN">
                </p
                <p class="myp">
                    <button class="btn btn-primary mybtn">LOGIN</button>
                </p>

            </form>
        </div>

    </div>


</div>
<style>
    .mybutton{
        width: 75px;
        border-radius: 15px;
        box-shadow: #0b18ff;
    }
    .myp{
        text-align: center;
    }

    .emptydiv{
        height: 100px;
    }

    .mylogin{
        width: 500px;
        height: 400px;
        background-color: #dadada;
        border:1px solid black;
        border-radius: 15px;
        box-shadow: black 5px 5px 5px 5px;
        margin: auto;
    }
    body{
        background-color: #7c7c7c;
    }

    .banklogo{
        text-align: center;
    }
    .banklogo img{
        width: 50%;
        margin-top: 20px;
    }

    .cardlogo img{
        width:50px;
    }
    .myloginform input{
        width: 80%;
        border-radius: 5px;
        color: darkblue;
        border:1px solid black;
        box-shadow: grey 5px 5px 5px 5px;
    }
    .mylogo{
        width: 150px;
        height: 160px;
        color: #00e200;
        box-shadow: hsl(203, 100%, 82%);
    }





</style>

</body>
</html>

