<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div id="loginform">
        <div class="topemptyspace"></div>
        <div class="myform">
            <div class="myheader">Registration</div>
            <form method="post">
                <p><input class="myinputs" required="required" name="username" type="email" placeholder="Username"></p>
                <p><input class="myinputs" required="required" name="password" type="password" placeholder="Password"></p>
                <p>Select your country</p>
                <p>
                    <select class="myselects">
                        <option type="text" name="USA">USA</option>
                        <option type="text" name="Uzbekistan">Uzbekistan</option>
                        <option type="text" name="UK">UK</option>
                        <option type="text" name="UAE">UAE</option>
                        <option type="text" name="China">China</option>
                    </select>
                </p>
                <p>How did you hear about us:<br>
                    Google <input type="checkbox"><br>
                    Yahoo <input type="checkbox"><br>
                    College <input type="checkbox"><br>
                    Friends <input type="checkbox"><br>
                </p>
               <p><button class="mybtn">Sign in</button></p>
                <p> <a href="#">Lost your Password</a> </p>

            </form>
        </div>
        <div class="buttomtext"> Don't have an accaunt? <a href="#">Sign up here!</a> </div>

    </div>
</div>
<style>

    .buttomtext{
        color: white;
        margin-top: 20px;
    }

    .myform a{
        color: #9e9e9e;
    }

    a{
        color: white;
        text-decoration: underline;
    }

    .mybtn{
        width: 60%;
        height: 30px;
        background-color: #005cbf;
        border-radius: 5px;
        font-size: 20px;
    }

    .myselects{
        width: 60%;
        height: 30px;
        background-color: #e9e9e9;
        border: none;
        border-radius: 3px;
    }

    .myinputs{
        background-color: #e9e9e9;
        width: 60%;
        border-radius: 3px;
        border: none;
        height: 30px;
    }

    .myheader{
        color: #040404;
        font-size: 45px;
        font-family: "Al Nile";
        padding-top: 10px;
        padding-bottom: 5px;
    }

    .topemptyspace{
        height: 22px;
    }
    .myform{
        background-color: white;
        width: 80%;
        height: auto;
        margin: auto;
        border-radius: 8px;
        box-shadow: black 3px 3px 3px;

    }

    #loginform{
        width: 100%;
        height: auto;
        background-color: #7ab4ff;
        text-align: center;
    }
</style>


</body>
</html>