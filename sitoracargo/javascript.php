<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My First Basic Calculator</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
 <div class="container-fluid">
     <div style="height: 50px;"></div>
     <div id="mycalculator">
        <table class="table">
            <tr>
                <td class="display" colspan="4">0</td>
            </tr>
            <tr>
                <td class="operator">AC</td>
                <td class="operator">+/-</td>
                <td class="operator">%</td>
                <td class="operator">÷</td>
            </tr>
            <tr>
                <td class="numbers">7</td>
                <td class="numbers">8</td>
                <td class="numbers">9</td>
                <td class="operator">×</td>
            </tr>
            <tr>
                <td class="numbers">4</td>
                <td class="numbers">5</td>
                <td class="numbers">6</td>
                <td class="operator">-</td>
            </tr>

            <tr>
                <td class="numbers">1</td>
                <td class="numbers">2</td>
                <td class="numbers">3</td>
                <td class="operator">+</td>
            </tr>
            <tr>
                <td colspan="2" class="numbers">0</td>
                <td class="operator">.</td>
                <td id="result">=</td>
            </tr>
        </table>
     </div>

 </div>
<style>

    tr td:last-child{
        background-color: #ec9649;
        color: white;
    }

    table td{
        text-align: center;
        font-weight: bolder;
        font-size: 100%;
    }

    tr:last-child td{
        height: 70px;
        border-bottom: 0px;


    }

    tr td:hover{
        background-color: #cacaca;
    }

    table td{
        border:1px solid black;
        cursor: pointer;
    }
    .display{
       font-size: 50px;
        text-align: right;
        background-color: #4c4c4c !important;
        color: white;
    }
#mycalculator{
    width:280px;
    height:369px;
    background-color: #e0e0e0;
    border-radius: 10px;
    border:1px solid black;
    box-shadow: #cacaca 5px 5px 5px 5px;
    margin: auto;
}
</style>
<script src="js/scripts.js"></script>
</body>
</html>
