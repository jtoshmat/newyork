<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test1</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div id="loginform">

        <div class="topemptyspace"></div>
        <div class="myform">
            <div class="header">Registration</div><br>

        <form method="post">
            <p><input class="myinputs" required="required" name="Username" type="email" placeholder="Username"></p>
            <p><input class="myinputs" required="required" name="password" type="password" placeholder="Password"></p>
            <p>Select your country</p>
            <p>
                <select class="myselects">
                    <option class="myselects" type="text">USA</option>
                    <option class="myselects" type="text">AZ</option>
                    <option class="myselects" type="text">KZ</option>
                    <option class="myselects" type="text">RU</option>
                    <option class="myselects" type="text">AU</option>
                </select>
            </p>

            <p>How did you hear about us:</p>

            <p class="checkbox"><input type="checkbox">Google<br>
            <input type="checkbox">Yahoo<br>
            <input type="checkbox">College<br>
            <input type="checkbox">Friends</p>

            <p><button class="mybtn">Sign in</button></p>

            <div class="Lost"> <a href="#">Lost your Password</a> </div>

        </div>
        </form>

        <div class="bottomtext">Don't have an accaunt? <a href="#">Sign in!</a>
        </div>
    </div>

</div>

<style>


    .bottomtext a{
      color: white;
    }

.bottomtext{
    text-decoration: underline;
    color: white;
}


    .mybtn{
        width: 65%;
        background-color: #005cbf;
        border-radius: 6px;
    }

    .myselects{
      width: 65%;
        height: 35px;
        background-color: #ffac9d;
        border: none;
    }

    .myinputs{
        width: 65%;
        height: 35px;
        background-color: #e8e8e8;
        border-radius: 7px;
        border: none;
        box-shadow: #6f6f6f 2px 2px 2px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }

    .header{
        color: #414d4b;
        font-size: 45px;
        font-family: -apple-system;
    }

    .myform{
        width: 80%;
        height: auto;
        background-color: white;
        padding-top: 15px;
        margin: auto;

    }

    .topemptyspace{
        margin: 20px;
    }

#loginform{
    background-color: #7abaff;
    width: 100%;
    height: auto;
    text-align: center;
    padding: 15px;
    padding-top: 20px;
}

</style>



</body>
</html>