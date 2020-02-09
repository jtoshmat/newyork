<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>summer</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="box">
        <div class="summer">
            <p>Summer</p>
            <p>85&#176;</p>
        </div>
    </div>
</div>
</body>
</html>

<style>

    .box {
        width: 500px;
        height: 500px;
        background-image: url("https://www.rd.com/wp-content/uploads/2017/07/01-birth-month-If-You-Were-Born-In-Summer-This-Is-What-We-Know-About-You_644740429-icemanphotos.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        margin: auto;
        margin-top: 110px;
        border-radius: 15px;
        border: solid 2px red;


    }

    .summer {
        width: 125px;
        height: 100px;
        background-color: #00cc00;

        opacity: 0.6;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;

    }

    .box:hover{
        background-image: url("https://lh3.googleusercontent.com/proxy/VhTDA0J4Zs_U1HsCO0kCjH2O6eQBGVOVMVUHkUqSWtMvSboTOEE4YAM570HxCnCHQDBgQq5pN7yAdi73mN6-55I7qTuFJagaHb345aKcmYRO2YPxv41RKrhji4j4-8Kq");
    }
    .box:hover > .summer{
        background-color: red;
        cursor: pointer;

    }
    .summer p:first-child {
        text-align: center;
        margin: 0;
        padding: 0;
        font-weight: bolder;
        font-size: 25px;

    }

    .summer p:last-child {
        text-align: center;
        margin: 0;
        padding: 0;
        font-weight: bolder;
        font-size: 30px;
    }
</style>
