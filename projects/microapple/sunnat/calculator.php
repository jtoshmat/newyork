<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div id="calculator">
    <div class="logodiv">
    <h5><em>CALCULATOR</em></h5>
    </div>
    <hr>
    <form>
        <p>
            <input id="num1" required="required" type="number" name="num1" class="myinput">
            <select id="operator" name="operator" class="option">
                <option value="+">Add</option>
                <option value="-">Minus</option>
                <option value="*">Multiply</option>
                <option value="/">Divide</option>
            </select>
            <input id="num2" required="required" type="number" name="num2" class="myinput">
            <button id="go_button" class="btn btn-success" type="button">=</button>
        </p>
    </form>
    <div id="results"></div>
    <hr>
    <div class="cal">
        <button class="circle1 circles">AC</button>
        <button class="circle2 circles">+/-</button>
        <button class="circle3 circles">%</button>
        <button class="circle4 circles">/</button>
        <button class="circle5 circles">7</button>
        <button class="circle6 circles">8</button>
        <button class="circle7 circles">9</button>
        <button class="circle8 circles">X</button>
        <button class="circle9 circles">4</button>
        <button class="circle10 circles">5</button>
        <button class="circle11 circles">6</button>
        <button class="circle12 circles">-</button>
        <button class="circle13 circles">1</button>
        <button class="circle14 circles">2</button>
        <button class="circle15 circles">3</button>
        <button class="circle16 circles">+</button>
        <button class="circle17 circles">0</button>
        <button class="circle18 circles"></button>
        <button class="circle19 circles">.</button>
        <button class="circle20 circles">=</button>
    </div>
</div>

</body>



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
    body{
        background-color: black;
    }


    #calculator{
        width: 600px;
        margin: 10px auto;
        border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
        background-color: #3e3e3e;

    }

    #calculator h5{
        color: black;
        font-size: 379%;
        position: relative;
        left: 118px;
        text-align: center;
    }
    .logodiv{
        background-image: url("https://cdn2.iconfinder.com/data/icons/ios7-inspired-mac-icon-set/1024/Calculator_5122x.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        width: 70px;
        height: 70px;
        position: relative;
        top: 10px;
        left: 10px;
    }
    #results {
        color: #9d761b;
        font-size: 200%;
        font-weight: bolder;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }


    .myinput {
        width: 70px;
        height: 70px;
        border: none;
        border-radius: 50%;
        padding: 5px;
        position: relative;
        left: 150px;
        background-color: black;
        color: saddlebrown;
        font-weight: bolder;
        font-size: 130%;
    }
    .option{
        position: relative;
        left: 150px;
        font-size: 100%;
        font-weight: bolder;
        background-color: saddlebrown;
        color: white;
    }
    #go_button{
        width: 70px;
        height: 70px;
        position: relative;
        top: -5px;
        left: 170px;
        font-size: 230%;
        background-color: saddlebrown;
        border: none;
        border-radius: 50%;
    }
    .circles{
        width: 70px;
        height: 70px;
        background-color: black;
        color: white;
        border-radius: 50%;
        display: inline-flex;
        margin: 23px;
        padding: 5px;
        align-items: center;
        justify-content: center;
    }
    .cal button{
        font-size: 220%;
        font-weight: bolder;
        text-align: center;
        margin: 38px;
        border: none;
    }

    .circle4{
        background-color: rgb(157, 118, 27);
    }
    .circle8{
        background-color: rgba(157, 118, 27, 0.88);
    }
    .circle12{
    background-color: rgba(157, 118, 27, 0.88);
    }
    .circle16{
        background-color: rgba(157, 118, 27, 0.88);
    }
    .circle20{
        background-color: rgba(157, 118, 27, 0.88);
    }
    .circle18{
        position: relative;
        top: 18px;
    }

</style>
</html>
