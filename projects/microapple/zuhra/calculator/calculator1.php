<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery.js"></script>
</head>
<body>
<div class="calculator">
    <h2>Calculator</h2>
    <hr class="line">
    <form>
        <p>
            <input id="num1" type="number" required="required" name="num1" class="myinput">
            <select id="operator" name="operators" >
                <option value="+">add</option>
                <option value="-">subtract</option>
                <option value="*">multiply</option>
                <option value="/">divide</option>
            </select>
            <input type="number" id="num2" required="required" name="num2" class="myinput">
            <button id="go" type="button">GO</button>
        </p>
    </form>
    <div class="results"></div>
</div>
</body>
<style>
    .calculator{
    height: 350px;
    width: 500px;
    margin: auto;
    border: #473644 2px solid;
        background-color: #413db1;
        margin-top: 25px;
}
    .line{
    background-color: #ff9226;
    }
    h2{
        color: #e58322;
        text-align: center;
        font-weight: bolder;
        background-color: #413db1;
    }
    .myinput{
        background-color: grey;
        border: none;
        cursor: pointer;
        border: #e58322 1px solid;
    }
    select{
        background-color: #808080;
        border: #e58322 1px solid;
    }
    button{
        background-color: #e58322;
        border: none;
    }
    .results{
        width: 200px;
        height: 52px;
        background-color: #808080;
        border: #e58322 1px solid;
        margin: auto;
        font-size: 200%;
        text-align: center;
    }

</style>
<script>
    $(function () {
        $("#go").click(function () {
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
        $(".results").html(result);
    }
</script>
</html>
