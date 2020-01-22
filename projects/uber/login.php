<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div id="loginform">
        <div class="topemptyspace"></div>
        <div class="myform">
            <div class="formheader">Login</div>
            <form method="post">
                <p><input required="required" class="myinputs" name="username" type="email" placeholder="Username"></p>
                <p><input minlength="5" required="required" class="myinputs" name="password" type="password" placeholder="Password"></p>
                <p><button class="btn mybtn">Sign in</button></p>
                <p><a href="#">Lost your Password?</a> </p>
            </form>
        </div>

        <div class="bottomtext">Don't have an account? <a href="#">Sign up here!</a></div>

    </div>

</div>


<style>

    .bottomtext{
        color: white;
        margin-top: 20px;
        font-size: 15px;
    }

    .myform a{
        color: #8e8ea2 !important;
    }


    a{
        color: white !important;
        text-decoration: underline;
    }

    .mybtn{
        background-color: #3598dc;
        color: white;
        width: 80%;
        font-size: 19px;
        font-weight: bold;
    }

    .myinputs{
        width: 80%;
        background-color: #f2f2f2;
        border-radius: 3px;
        height: 42px;
        border: none;
        padding: 5px;
        padding-left: 14px;
        color: grey;
    }

    .formheader{
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
        padding-bottom: 9px;
        color: #6d6d6d;
        font-family: "Times New Roman"
    }

    .topemptyspace{
        height: 25px;
    }

    .myform{

        width:80%;
        height: 344px;
        background-color: white;
        margin: auto;
        border-radius: 7px;
        box-shadow: #145f92 2px 2px 2px 2px;


    }

    #loginform{
        background-color: #3598dc;
        width:87%;
        height: 431px;
        text-align: center;
    }
</style>

</body>
</html>