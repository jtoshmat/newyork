<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<div id="calculator">
    <h2>My Calculator</h2>
    <hr>
    <form>
        <p>
            <input id="num1" required="required" type="number" name="num1" class="myinput">
            <select id="operator" name="operator">
                <option value="+">Add</option>
                <option value="-">Minus</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
            </select>
            <input id="num2" required="required" type="number" name="num2" class="myinput">
            <button id="go_button" class="btn btn-success" type="button">GO</button>
        </p>
    </form>
    <div id="results"></div>
</div>

<script>
    $(function () {
        $("#go_button").click(function () {
            var num1 = $("#num1").val();
            var operator = $("#operator").val();
            var num2 = $("#num2").val();

            if (operator=='+'){
                add(num1, operator, num2);
            }else if (operator=='-'){
                minus(num1, operator, num2);
            }else if (operator=='/'){
                divide(num1, operator, num2);
            }else if (operator=='*'){
                multiply(num1, operator, num2);
            }
            return false;
        });
    });


    function add(num1, operator, num2) {
        var c = eval(num1+ ' + ' + num2);
        var resultText =  num1 + ' + ' + num2 + ' = ' + c;
        displayResults(resultText);
    }

    function minus(num1, operator, num2) {
        var c = eval(num1+ ' - ' + num2);
        var resultText =  num1 + ' - ' + num2 + ' = ' + c;
        displayResults(resultText);
    }

    function multiply(num1, operator, num2){
        var c = eval(num1+ ' * ' + num2);
        var resultText =  num1 + ' * ' + num2 + ' = ' + c;
        displayResults(resultText);
    }

    function divide(num1, operator, num2){
        var c = eval(num1+ ' / ' + num2);
        var resultText =  num1 + ' / ' + num2 + ' = ' + c;
        displayResults(resultText);
    }

    function displayResults(result) {
        $("#results").html(result);
    }
</script>

<style>

    #results {
        background-color: #4e1510;
        color: #ffcf24;
        font-size: 200%;
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
    }

    #calculator {
        width: 600px;
        height: auto;
        margin: 50px auto;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    .myinput {
        width: 70px;
        height: 70px;
        border: none;
        border: 1px solid darkgrey;
        border-radius: 5px;
        padding: 5px
    }
</style>
</body>
</html>