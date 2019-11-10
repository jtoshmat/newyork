<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div style="height: 80px"></div>
    <div class="box1">
        <img class="user_icon" src="img/user_icon.png">
        <div class="loginform">
            <div style="height: 80px"></div>
            <p class="myinput formtitle">User Login</p>
            <form method="post">
                <p class="myinput"><input minlength="5" maxlength="50" required="required" type="email" placeholder="Username"></p>
                <p class="myinput"><input minlength="8" maxlength="10" required="required" type="password" placeholder="Password"></p>
                <p class="myinput"><button class="btn btn-primary mybtn">Login</button></p>
            </form>
        </div>
    </div>
</div>



<style>
    .mybtn:hover{
        background-color: black;
        color: #ffd841;
    }
    .mybtn{
        width:70%;
    }
    .myinput input{
        width:70%;
        height: 30px;
        color: #393939;
        border:1px solid black;
        border-radius: 5px;
    }
    .user_icon{
        width: 140px;
        position: relative;
        top: 70px;
        left: 343px;
    }
    .formtitle{
        font-size: 30px;
        font-weight: bolder;
    }
    .myinput{
        text-align: center;

    }
    .loginform{
        width: 47%;
        height:auto;
        background-color: #ffffff;
        margin: auto;
        border:1px solid black;
        box-shadow: black 5px 5px 5px 5px;
        border-radius: 5px;
    }
    .box1{
        width: 830px;
        height:500px;
        background-color: #7f7f7f;
        margin: auto;
    }
    body{
        background-color: black;
    }
</style>
</body>
</html>