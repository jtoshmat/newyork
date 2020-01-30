<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What is Lorem Ipsum?</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="mybox">
            <div class="topdiv">
                <div style="height: 55px"></div>
                <div class="jon">Gulchatay Restaraniga Xush <a target="_blank" href="http://google.com">Kelibsiz!</a></div>
            </div>
            <div class="middlediv">
                <p class="mytitle">What is Lorem Ipsum?</p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions.
                </p>
            </div>
            <div class="bottomdiv">
                <div class="myaddress">
                    200 Main Street <br>
                    Wisconsin Dells, WI 53965 <br>
                    (608) 254-5900
                </div>
            </div>
        </div>
    </div>
<style>
    .jon a {
        color: #ffdc58;
        text-decoration: none;
    }
    .topdiv:hover > .jon {
        opacity: 1;
        cursor: pointer;
    }
    .jon {
        color: white;
        font-size: 27px;
        text-align: center;
        font-weight: bolder;
        background-color: #4b0019;
        opacity: 0.6;
        text-shadow: black 3px 3px;
    }
    .topdiv {
        height: 200px;
        border-bottom: 1px solid black;
        background-image: url("img/restaraunt.jpg");
        background-size: 100% 100%;
    }
    .middlediv {
        padding: 25px
    }
    .mytitle {
        text-align: center;
        font-weight: bolder;
        font-size: 30px;
    }
    .myaddress {
        background-color: black;
        margin: 5px;
        height: 85px;
        color: white;
        text-align: center;
        font-size: 15px;
        padding-top: 10px;
    }
    .restaraunt_image {
        width: 100%;
    }
    .mybox {
        width: 400px;
        height: auto;
        background-color: #ffffff;
        border: 2px solid black;
        margin: auto;
    }
    body {
        background-color: #fffbf9;
    }
</style>
</body>
</html>
