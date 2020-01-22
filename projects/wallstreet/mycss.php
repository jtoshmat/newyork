<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My CSS</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container-fluid myhouse">
    <div id="leftwindow">
       <h2>Welcome to my house!</h2>


       <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Model</td>
            </tr>
            <tr>
                <td>1</td>
                <td>BMW</td>
                <td>M6</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Audi</td>
                <td>RS5</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Alfa Romeo</td>
                <td>Stelvio</td>
            </tr>

        </table>

    </div>
    <div id="rightwindow">

        <img id="lightbulb" src="../img/lightbulboff.png">
        <img id="lightbulb2" src="../img/lightbulboff.png">

    </div>
    <div class="switchbox">
        <button class="btn btn-primary" id="turnon">ON</button>
        <button class="btn btn-danger" id="turnoff">OFF</button>
    </div>
</div>
<script>
    $(function () {
        $("#turnon").click(function () {
           $("#rightwindow img").attr('src','../img/lightbulbon.png');
        });
        $("#turnoff").click(function () {
            $("#rightwindow img").attr('src','../img/lightbulboff.png');
        });
    });
</script>
<style>
    .myhouse{
        width:1102px;
    }
    .switchbox button:hover{
        color: #ffe34b;
        box-shadow: darkgrey 5px 5px 5px 5px;
    }
    .switchbox button{
        margin: 5px;
    }
    .switchbox{
        text-align: right;
    }
    #lightbulb{
        width:32px;
        position: relative;
        top: 87px;
        left: 90px;
    }
    #lightbulb2{
        width:32px;
        position: relative;
        top: 94px;
        left: 427px;
    }

    .table {
        width: 88%;
        background-color: white;
        margin: auto;
        margin-bottom: 1rem;
        color: #9c340c;
        border: 5px solid #8c6969;
    }

    .mytext{
        color: #ecedff;
        box-shadow: black 2px 2px 2px 2px;
        background-color: #4b0019;
    }

    #leftwindow{
        width:50%;
        background-color: #00a2f9;
        height: 300px;
        float: left;
        font-size: 14px;
        color:white;
        font-family: Verdana
    }
    #rightwindow{
        width:50%;
        background-color: #2b5a24;
        height: 300px;
        float: right;
        background-image: url("../img/living_room.jpeg");
        background-size: 100% 100%;
    }
</style>

</body>
</html>