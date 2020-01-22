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
    <div style="height: 100px"></div>
    <div class="myloginform">
        <p>
            <span>Login Form</span>
        </p>
        <p>
            <input name="email" type="email" placeholder="Your username">
        </p>
        <p>
            <input name="password" type="password" placeholder="Your Password">
        </p>
        <p>
            <button class="btn btn-success">Sign In</button>
        </p>
        <p>
            <nav>
                <a href="#">Forgot Password</a> |
                <a href="#">Sign Up</a>
            </nav>
        </p>
    </div>
    <div style="height: 100px"></div>
</div>

<style>
    .myloginform span{
        font-size: 40px;
        font-family: "American Typewriter";
        font-weight: bolder;
    }
    .myloginform input:focus{
        background-color: #ff413a;
        color: white !important;
    }
    .myloginform input{
        border-radius: 6px;
        height: 48px;
        padding: 15px;
    }
    .myloginform input, button{
        width: 94%;
    }
    .container-fluid{
        background-color: #00a2f9;
    }
    .myloginform{
        background-color: white;
        border: 1px solid darkblue;
        width: 480px;
        height: auto;
        margin: auto;
        text-align: center;
    }
</style>

</body>
</html>