<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div class="header">
        <ul class="nav">
            <li>HOME</li>
            <li>Contact Us</li>
            <li>About Us</li>
            <li>My Photos
                <ul class="firstchild">
                    <li>Trip to Hawaii</li>
                    <li>Trip to Uzbekistan</li>
                    <li>Childhood Photos</li>
                </ul>
            </li>
            <li>Location</li>
            <li>My Resume</li>
            <li>My Videos</li>
        </ul>
    </div>
</div>

<style>
    .nav li{
        margin: 5px;
        background-color: #710000;
        color: #ffd746;
        width: 112px;
        text-align: center;
        cursor: pointer;
    }

    .nav li:hover{
        background-color: darkblue;
        color: white;
    }

    .firstchild li{
        display: inline-block;
        background-color: #00a2f9;
        position: absolute;
        left: 381px;
        top: 24px;
        display: none;

    }

    .nav li:hover > ul li {
        display: block;
    }

</style>
</body>
</html>