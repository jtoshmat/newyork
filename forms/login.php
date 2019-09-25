<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slack Login Form</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<div class="container">

    <div class="myform">

        <form method="post">
            <p class="myheader">Sign in to my-it-education</p>
            <p class="myheader2">my-it-education.slack.com</p>
            <div class="myinputs">
                <p class="mytitle">Enter your email address and password</p>
                <p><input name="email" type="email" class="input-group"></p>
                <p><input name="password" type="password" class="input-group"></p>
                <p class="mylastp">
                    <button class="btn btn-primary input-group mybtn">Sign in</button></p>
                <p><input type="checkbox"> Remember Me</p>
                <p>
                    <a href="#">Forgot password</a> |

                    <a href="#">Forgot which email you used?</a>
                </p>
            </div>
        </form>

    </div>

</div>


<style>

    body{
        background-color: #859cb8;
        font-family: "American Typewriter";
    }


    .container{
        background-color: #e8eef4;
        height: auto;
    }

    .myform{
        width: 100%;
        height: 100%;
        position: relative;
        background-color: #fff;
        margin: auto;
    }


    .myheader{
        text-align: center;
        font-size: 33px;
    }
    .myheader2{
        text-align: center;
        font-size: 17px;
    }

    form {
        width: 90%;
        margin: auto;
    }
    .mylastp{
        text-align: center;
    }

    .mytitle{
        text-align: center;
    }

</style>

</body>
</html>