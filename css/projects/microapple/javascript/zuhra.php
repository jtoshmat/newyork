<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../../js/jquery-3.4.1.min.js"></script>
    <style>
        body{
            background-color: black;
        }
        .boxes{
            width: 100px;
            height: 100px;
            border: 1px solid black;
            display: inline-block;
            margin: 10px;
            cursor: pointer;
        }
        #games{
            width: 600px;
            height: 400px;
            margin: 100px auto;
            background-color: white;
            text-align: center;
        }
    </style>

    <script>
        $ (function () {
            $(".boxes").click(function () {
                var color = $(this).text();
                $(this).css("background-color", color);

            });
            $("#button").click(function () {
                $(".boxes").css("background-color", 'white')
            });
            $(".boxes").dblclick(function () {
                $(this).fadeOut("fast");
            })
            $("#reload_window").click(function () {
                location.reload();
            });
        });
    </script>
</head>
<body>
<div id="games">
    <div class="boxes">red</div>
    <div class="boxes">yellow</div>
    <div class="boxes">green</div>
    <div class="boxes">purple</div>
    <div class="boxes">black</div>
    <div class="boxes">pink</div>
    <div class="boxes">grey</div>
    <div class="boxes">orange</div>
    <hr>
    <button id="button">Start Over</button>
    <button id="reload_window">Reload</button>
</div>
</body>
</html>


