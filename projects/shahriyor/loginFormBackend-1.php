<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>
<body>

<div class="box">
    <h2 class="text">Forgot Password?</h2>
    <p style="opacity: .5; text-align: center; margin-top: 13px; font-size: 12px">RECOVER YOUR ACCOUNT PASSWORD</p>
    <hr>
    <form>
        <p style="font-size: 14px; margin-left: 6px">EMAIL ADDRESS:</p>
        <input class="email" type="email" placeholder="Your Email Address" required="required">
        <button class="btn" type="submit">Send Instructions</button>
        <hr>
        <p style="text-align: center">Remember your password?<a href="loginForm.php">Login</a></p>
    </form>

</div>


<style>
    .box {
        width: 600px;
        height: 410px;
        margin: auto;
        margin-top: 200px;
        background-color: white;
    }
    body {
        background-color: #ebebeb;
    }
    .text {
        text-align: center;
        margin: auto;
    }
    .email {
        margin-left: 10px;
        width: 570px;
        height: 30px;
        font-size: 16px;
        border-radius: 5px;
    }
    .btn {
        width: 575px;
        height: 35px;
        margin-left: 10px;
        border-radius: 8px;
        margin-top: 18px;
        background-color: dodgerblue;
        font-size: 12px;
        color: white;
    }

</style>


</body>
</html>
