<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>

<div class="box">
    <h2 style="text-align: center">Sign Up</h2>
    <p style="text-align: center; opacity: .5;font-size: 14px">CREATE A NEW ACCOUNT</p>
    <hr>
    <form>
        <p style="font-size: 14px; margin-left: 6px">NAME:</p>
        <input class="name" placeholder="Your first and last name" required="required">
        <p style="font-size: 14px; margin-left: 6px">EMAIL ADDRESS:</p>
        <input class="name" type="email" placeholder="Your email address" required="required">
        <p style="font-size: 14px; margin-left: 6px">PASSWORD:</p>
        <input class="name" type="password" placeholder="Choose a password" required="required">
        <p style="font-size: 14px; margin-left: 6px">PASSWORD:</p>
        <input class="name" type="password" placeholder="Confirm password" required="required">
        <button class="btn">Sign up</button>
        <input class="check" type="checkbox" <p>I agree to the <u>Terms of use</u></p>
        <hr>
        <p style="text-align: center">Already signed up? <a href="loginForm.php">Login</a></p>
    </form>
</div>




<style>
    .box {
        width: 600px;
        height: 520px;
        margin: auto;
        margin-top: 200px;
        background-color: white;
    }
    body {
        background-color: #ebebeb;
    }
    .name {
        margin-left: 10px;
        width: 570px;
        height: 30px;
        font-size: 16px;
        border-radius: 5px;
    }
    .btn {
        width: 575px;
        height: 25px;
        margin-left: 10px;
        margin-top: 10px;
        background-color: dodgerblue;
        border-radius: 5px;
        color: white;
    }
    .check {
        margin-left: 210px;
    }
</style>

</body>
</html>
