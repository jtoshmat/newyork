<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <div style="height: 80px"></div>
    <div id="box1 ">
        <img class="user_icon" src="img/user_icon.png">
        <div class="loginform">
            <div style="height: 80px"></div>
            <p class="myinput formtitle">User Login</p>
            <form method="post">
                <p class="myinput"><input minlength="5" maxlength="50" required="required" type="email"
                                          placeholder="Username"></p>
                <p class="myinput"><input minlength="8" maxlength="10" required="required" type="password"
                                          placeholder="Password"></p>
                <p class="myinput">
                    <button class="btn btn-primary mybtn">Login</button>
                </p>
            </form>
        </div>
    </div>
</div>
<style>


</style>
</body>
</html>