<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monday</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/myscripts.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div id="mycalculator">

        <h3>My Calculator</h3>

        <table>
            <tr>
                <td colspan="4" class="display">0</td>
            </tr>

            <tr>
                <td class="reset">AC</td>
                <td>+/-</td>
                <td>%</td>
                <td class="sign">&#247;</td>
            </tr>

            <tr>
                <td class="num">7</td>
                <td class="num">8</td>
                <td class="num">9</td>
                <td class="sign">x</td>
            </tr>

            <tr>
                <td class="num">4</td>
                <td class="num">5</td>
                <td class="num">6</td>
                <td class="sign">-</td>
            </tr>

            <tr>
                <td class="num">1</td>
                <td class="num">2</td>
                <td class="num">3</td>
                <td class="sign">+</td>
            </tr>

            <tr>
                <td colspan="2">0</td>
                <td>.</td>
                <td class="execute">=</td>
            </tr>


        </table>
    </div>
</div>
<style>

    #mycalculator table td:last-child{
        background-color: #e0a800;
    }

    #mycalculator table tr:nth-child(1){
        background-color: #595b5e;

    }

    #mycalculator table tr:nth-child(1) td{
       text-align: right;
        font-size: 40px;
         background-color: #555759;
    }

    #mycalculator table tr:nth-child(2){
        background-color: #66686a;
    }

    #mycalculator table tr{
        background-color: #7f8183;
    }

    #mycalculator table td{
        border:1px solid #000;
        color: white;
        text-align: center;
        font-size: 20px;
        font-family: "American Typewriter";
    }

    #mycalculator table td:hover{
        background-color: #d37e8a;
        cursor: pointer;
    }

    #mycalculator table tr:nth-child(1) td:hover{
        background-color: #e6f0f7;
        cursor: pointer;
    }

    #mycalculator{
        margin: auto;
        width: 232px;
        height: 320px;

    }

    #mycalculator table{
        width: 100%;
        height: 100%;
        background-color: red;
        border-radius: 10px;
    }
</style>
</body>
</html>