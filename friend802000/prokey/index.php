<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Product key</title>
</head>
<body>

<?php
$key = null;
if (isset($_POST['key'])){
    $key = strtoupper($_POST['key']);
}
//12ABC-F5GTH-646JH-97GHD it is for numbers and letter description

$keygen = "[0-9]{2}[A-Z]{3}-[A-Z]{1}[0-9]{1}[A-Z]{3}-[0-9]{3}[A-Z]{2}-[0-9]{2}[A-Z]{3}$";
$correctKey = preg_match("#$keygen#", $key, $match);

if (!$correctKey){
    $error = "Your Serial number is invalid!";
    $color = "red";
} else{
    $error = "Great! Your serial Number accepted!";
    $color = "green";
}
?>


<div class="container-fluid">
    <form method="post">
        <div class="top-box">
            <span class="img"><img src="prokey.png" width="100px"></span>
            <h1>Enter Your Product Key</h1>
        </div>
        <div class="box-1">

            <h5>Need to find your Product Key?</h5>
            <p>Your Product key is 25 character and  is typically found in your product packaging. If you cannot find your Product Key, click the "Learn more about product Keys and see examples" link</p>
        </div>
        <div class="license">
            <span><input name="key" type="text" value="<?=$key?>" placeholder="12ABC-F5GTH-646JH-97GHD"><button type="submit">SUBMIT</button></span>

        </div>
        <span style="color:<?=$color?>"><?=$error?></span>
    </form>
</div>

</body>
</html>

<style>
    .top-box, .license{
        margin: 30px;
        padding-top: 20px;
    }
    .box-1{
        margin-left: 150px;
        width: 500px;
        height: 300px;
        border: black 1px solid;
    }
    .img {
        float: left;
        padding: 0;
        margin: 0;

    }
    h5{
        font-size: 40px;
    }
    .container-fluid{
        margin: auto;
        font-size: 20px;
        text-align: center;
        width: 800px;
        height: 570px;
        border-radius: 5px 5px;
        background-color: #f9f9f9;
    }
    input, button{
        font-size: 30px;
    }
    input{
        width: 450px;
    }

    body{
        background-color: #0b18ff;
    }

</style>