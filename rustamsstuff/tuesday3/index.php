<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rustam Travel</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
</head>
<body>



<div class="container-fluid">
    <div class="myheader">
        <div class="mylogo">
            <img src="pics/travellogo3.png">
        </div>
            <div class="myslogan">
            <span>Travel into the future!</span>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="kinolenta">
        <table>
            <tr>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
                <td><img src="pics/kinologo4.jpeg"></td>
            </tr>
        </table>

    </div>
    <div style="height: 50px;"></div>
    <div class="displaywindow">
       <img src="pics/travellogo3.png">
    </div>
</div>
<style>
    .displaywindow{
        width: 600px;
        margin: auto;
        border: 4px inset black;
    }
    .displaywindow img{
        width: 100%;
    }
    table{
        margin: auto;
    }
    td{
        background-image: url("pics/kinologo4.jpeg");
        background-size: 80px;
        height: 80px;
        };
    td img{
        width: 80px;
        border: 1px solid black;
    }
    .kinolenta{
        background-color: #0f6674;
        border-bottom: 4px solid black;
       /* height: 90px;
        border-bottom: 1px solid black;*/
    }
    .mylogo img{
    width: 150px;
    }
    .mylogo{
        float: left;
    }
    .myslogan{
        float: right;
        width: 80%;
    }
    .myslogan span{
        line-height: 100px;
        font-size: 40px;
        font-family: "American Typewriter";
    }
    .myheader{
        background-color: #4c6d96;
        border-bottom: 4px solid black;
    }
    .container-fluid{
        padding-right: 0px;
        padding-left: 0px;
    }
</style>
</body>
</html>