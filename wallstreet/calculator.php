<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"

</head>
<body>
<h1>HTML Calculator</h1>
<div id="calc-parant">
    <div class="row">
        <div class="column" id="calc-display-val">0</div>
    </div>
    <div class="row">
        <div class="calc-btn-column" id="calc-clear">AC</div>
        <div class="calc-btn-culumn" id="calc-backspace">&#8676;</div>
        <div class="calc-btn-calc-btn-operator column" id="calc-divide">&#247;</div>
    </div>
    <div class="row">
        <div class="calc-btn calc-btn-num column" id="calc-seven">7</div>
        <div class="calc-btn calc-btn-num column" id="calc-eight">8</div>
        <div class="calc-btn calc-btn-num column" id="calc-nine">9</div>
        <div class="calc-btn-calc-btn-operator column" id="calc-multiply">x</div>
    </div>
    <div class="row">
        <div class="calc-btn calc-btn-num column" id="calc-four">4</div>
        <div class="calc-btn calc-btn-num column" id="calc-five">5</div>
        <div class="calc-btn calc-btn-num column" id="calc-six">6</div>
        <div class="calc-btn-calc-btn-operator column" id="calc-minus">-</div>
    </div>
    <div class="row">
        <div class="calc-btn calc-btn-num column" id="calc-one">1</div>
        <div class="calc-btn calc-btn-num column" id="calc-two">2</div>
        <div class="calc-btn calc-btn-num column" id="calc-three">3</div>
        <div class="calc-btn-calc-btn-operator column" id="calc-plus">+</div>
    </div>
    <div class="row">
        <div class="calc-btn calc-btn-num column" id="calc-zero">0</div>
        <div calss="calc-btn column" id="calc-decimal">.</div>
        <div class="calc-btn-calc-btn-operator column" id="calc-equals">=</div>
    </div>
</div>


<style>
    .calc-btn{
        background-color: silver;
        color: black;
        width: 50px;
        height: 70px;
        border: 1px solid grey;
        text-align: center;
        cursor: pointer;
        font-size: 40px;
        font-weight: 200;
        padding-top:16px;
    }
    .calc-btn:hover{
        background-color: orange;
    }
    .row{
        display: table;
        table-layout: fixed;
        width: 250px;
    }
    .column{
        display: table-cell;
    }
    #calc-zero{
        width: 100px;
        border-radius:0 0 0 7px;
    }
    #calc-clear{
        width: 52px;
    }
    #calc-display-val{
        height: 80px; color: white;
        text-align: right;
        border-left: 1px solid grey;
        border-right: 1px solid grey;
        border-top: 1px solid grey;
        font-size: 32px;
        background-color: #383838;
        overflow: hidden;
        white-space: nowrap;
        padding: 12px;
        border-radius: 7px 7px 0 0;
    }
    .calc-btn-calc-btn-operator{
        background-color: orange;
        color: white;
    }
    h1{
        text-align: center;
        margin-top: 50px;
    }
    #calc-equals{
        border-radius:0 0 7px 0 ;
    }
    #calc-parant{
        margin-left: calc(45% - 95px);
    }

</style>
</body>
</html>

















