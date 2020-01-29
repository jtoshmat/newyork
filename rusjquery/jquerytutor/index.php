<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script>


        $("document").ready(function () {

            $("#textBox").on("click", whenMouseIsClicked);

            $("#textBox").on("mouseleave", whenMouseLeaves);

            function  whenMouseIsClicked() {

                $("#textBox").html("<h4>You Clicked Me</h4>");
            }

            function whenMouseLeaves() {
                $("#textBox").html("<h4>Where ya going?</h4>");
            }
        });

    </script>

    <style>
        #textBox{
            width: 150px;
            height: 150px;
            border: 1px solid black;
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <div id="textBox">

    </div>
</body>
</html>

















