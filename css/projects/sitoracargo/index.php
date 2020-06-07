<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Sitora Cargo Site!</title>
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container">
    <img id="newsign" src="../img/newsign.png">
    <div class="leftwindow">
        <img src="../img/living_room.jpeg">
        <div class="bottomleftwindow">
            <h1>What is Lorem Ipsum?</h1>
        <br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and scrambled
            it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum passages, and
            more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.

        </div>
    </div>

    <div class="rightwindow">
        <img class="bukhara_image" src="http://uzbek-travel.com/images/uz/Cities/Buhara/2882371775_4db46ca6ef_b.jpg">


        <hr>
        <p style="text-align: center">
            <img id="lightbulb" src="../img/lightbulboff.png">
        </p>
        <p style="text-align: center">
            <button id="turnon">Turn Light On</button>
            <button id="turnoff">Turn Light Off</button>
        </p>

    </div>
</div>
<script>

    $(function () {
        $("#turnon").click(function () {
           $("#lightbulb").attr("src","../img/lightbulbon.png");
        });
        $("#turnoff").click(function () {
            $("#lightbulb").attr("src","../img/lightbulboff.png");
        });
    });
</script>
<style>
    #newsign{
        position: absolute;
        top:0;
        left: 14%;
    }
    button:hover{
        color: #9dd2ff !important;
        cursor: pointer;
        border:3px dotted #d30007;
    }
    button:first-child{
        background-color: #2b5a24;
        height:50px;
        border-radius: 10px;
        box-shadow: black 5px 5px 5px 5px;
        font-size: 16px;
        color: #d5d6e8;
    }
    button:nth-child(2){
        background-color: red;
        height:50px;
        border-radius: 10px;
        box-shadow: black 5px 5px 5px 5px;
        font-size: 16px;
        color: #ffdf3c;
    }
    #lightbulb{
        width:25%;
        height:150px;
    }
    .bottomleftwindow{
        background-color: #00a2f9;
        overflow: auto;
        font-size: 12px;

    }
    .bukhara_image{
        width: 100%;
        height:300px;
    }
    .leftwindow img{
        width: 100%;
        height:300px;
    }
    .rightwindow{
        width:50%;
        height:583px;
        background-color: #45953a;
        float: right;
    }
    .leftwindow{
        width:50%;
        height:583px;
        background-color: #d33f5b;
        float: left;
    }
.container{
    width:800px;
    height:500px;
    color: #ffe144;
}
</style>
</body>
</html>