<!doctype html>
<html lang="en">
<head>zZXASZWA
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div id="loginform">
        <div class="topemptyspace"></div>
        <div class="myform">
            <div class="formheader">Registration</div>
            <form method="post">
                <p><input required="required" class="myinputs" name="username" type="email" placeholder="Username"></p>
                <p><input minlength="5" required="required" class="myinputs" name="password" type="password" placeholder="Password"></p>
                <p>Select your country</p>
                <p>
                    <select class="myselects" name="countries">
                        <option value="usa">USA</option>
                        <option value="uzbekistan">Uzbekistan</option>
                        <option value="russia">Russia</option>
                    </select>
                </p>
                <p>
                    Howd did you hear about us?
                </p>
                <div id="checkbox">
                    Google <input type="checkbox"><br>
                    Yahoo <input type="checkbox"><br>
                    MSN <input type="checkbox"><br>
                    TV <input type="checkbox"><br>
                </div>
                <p><button class="btn mybtn">Sign in</button></p>
                <p><a href="#">Lost your Password?</a> </p>
            </form>
        </div>

        <div class="bottomtext">Don't have an account? <a href="#">Sign up here!</a></div>

    </div>
    <div>

    </div>

</div>



<style>
    #checkbox{
        text-align:right;
        width:55%;
    }

    .myselects{
        display: inline-block;
        width: 80%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e) no-repeat right 0.75rem center/8px 10px;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }


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
        height: auto;
        background-color: white;
        margin: auto;
        border-radius: 7px;
        box-shadow: #145f92 2px 2px 2px 2px;


    }

    #loginform{
        background-color: #3598dc;
        width:87%;
        height: auto;
        text-align: center;
    }
</style>

</body>
</html>