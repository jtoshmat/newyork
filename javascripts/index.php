<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I love Javascript</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/myscripts.js" type="text/javascript"></script>
</head>
<body>

<div class="container">
    <div id="mybox"></div>
    <hr>


    Number 1: <input type="number" name="num1" id="num1">
    <br>
    Select operator:
    <select id="operator">
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="+">+</option>
        <option value="-">-</option>
    </select>
    <br>
    Number 2: <input type="number" name="num1" id="num2">
    <br>
    <button id="btn_clickme" class="btn btn-primary">Click Me</button>
<hr>



</div>

<!--
@Hursandbek, please do not forget to finish part
-->

<style>
    #mybox{
        width:200px;
        height: 50px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        border: 1px solid #203158;
    }
</style>

<script>
    //@TODO This is my weekend to-do list. I will need to finish before Monday
    // @Ansar, Hursandbek already started this and is planing on completing before Xmas
    /*
        Multi Line Comment 1
        Multi Line Comment 2
        Multi Line Comment 3
        Multi Line Comment 4
        Multi Line Comment 5
        Multi Line Comment 6
     */

$(function () {

    $("#btn_clickme").click(function () {
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