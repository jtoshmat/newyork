<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="blankdiv"></div>
    <div class="loginform">
            <div class="profile_photo">
                <img src="../img/default_photo_cirle_profile.png">
            </div>
        <div class="myform_inputs">
            <form method="post" action="login_process.php">
                <div class="formheader">SIGN IN</div>
                <p><input placeholder="Your Email Address" name="email" type="email" class="myinputs input-group"></p>
                <p><input placeholder="Your Password" name="password" type="password" class="myinputs input-group"></p>
                <p class="myformtext">
                    <div class="leftspan">
                        <input type="checkbox">&nbsp;Remember Me
                    </div>
                    <div class="rightspan">
                        Forgot Password?
                    </div>
                </p>

                <p class="myformbutton">
                    <button class="btn btn-primary">LOGIN</button>
                </p>
            </form>
        </div>
    </div>


</div>

<style>

    .formheader{
        width:200px;
        background-color: #00c6fd;
        color:white;
        position: relative;
        top: -181px;
        height: 50px;
        left: 70px;
        text-align: center;
        line-height: 50px;
        font-size: 22px;
    }

    .myformbutton button{
        width: 97%;
        border-radius: 10px;
        background-color: #00c6fd;
        border: 1px solid #00c6fd;
    }
    .myformbutton{
        text-align: center;
        margin-top: 45px;
    }

    .leftspan, .rightspan{
        font-size: 10px;
        font-family: "American Typewriter";
        margin-top: -10px;
        padding-left: 10px;
        padding-right: 10px;
    }


    .leftspan{
        float: left;
        width:auto;
    }

    .rightspan{
        float: right;
        width: auto;
    }

    .myinputs{
        width:97%;
        border-radius: 10px;
        padding:5px;
        margin: 5px;
    }



    .profile_photo{
        width:100%;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 10px;
    }

    .profile_photo img{
        width:100px;
    }
    body{
        background-color: #b4b2b8;
    }

    .loginform{
        width:350px;
        height:400px;
        margin: auto;
        border:2px solid white;
        border-radius: 15px;
        box-shadow: grey 5px 5px 5px 5px;
        background-color: #c7c8cc;
    }
    .blankdiv{
        height:100px;
    }

</style>
</body>
</html>