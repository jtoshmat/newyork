<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">

    
    <style>
        #header{
            width: 350px;
            height: 350px;
            border-radius: 10px;
            background-color: #6d96bf;
            margin: 50px;
            padding-top: 10px;
            padding-left: 40px;
        }

        .tophead{
            text-align: center;
            text-decoration: underline;
            font-size: 25px;
            color: white;
        }

        .head2{
            width:260px ;
            height: 260px;
            background-color: #cfd5d9;
            padding-top: 35px;
            border-radius: 7px;
            margin-left: 5px;
        }

        #mybox{
            text-align: center;
            width: 220px;
            height: 50px;
            background-color: #e7edf1;
            margin-left: 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 3px;
        }
        .number1{
            width: 150px;
            height: auto;
            background-color: #e7edf1;
            margin-bottom: 10px;
            margin-left: 3px;
            border-radius: 3px;
        }


        .number2{
            width: 150px;
            height: auto;
            background-color: #e7edf1;
            margin-bottom: 10px;
            border-radius: 3px;

        }


        .myselect{
            margin-bottom: 10px;
        }

        #btn_go{
            width: 45px;
            height: auto;
            color: white;
            background-color: #005cbf;
            border: none;
            border-radius: 5px;
            margin-left: 190px;

        }
    </style>
</head>
<body>

<div class="container">
    <div id="header">
        <div class="tophead">Length conversion</div>
        <div class="head2">

          <div id="mybox"></div>


          Number1:  <input class="number1" type="num1" id="number1"><br>

          Number2: <input class="number2" type="num2" id="number2"><br>


            Lenght:

            <select class="myselect">
                <option value="km">km</option>
                <option value="m">mile</option>
            </select> <br>

            <button id="btn_go">Go</button>
        </div>
    </div>
</div>

<script>


    $(function () {

        $("#btn_go").click(function () {
            var operator = $("#operator").val();
            var x = $("#num1").val();
            var y = $("#num2").val();

            if (operator == '*'){var c = x * y;}
            if (operator == '+'){var c = x + y);}

    if (operator == '/'){var c = x / y;}

    if (operator == '-'){var c = x - y;}

    if (c<0){alert("God damn, this is so negative, give me some more positive energy");}

    $("#mybox").html(x + operator + y +"=" + c);
    });




    });


</script>
</body>
</html>
