<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
<h1>Basic Calculator</h1>
<div id="calculator">
    <form>
        <table class="calculator">

            <tr>
                <td colspan="4" class="display">
                    1
                </td>
            </tr>

            <tr>
                <td>C</td>
                <td>+/-</td>
                <td>%</td>
                <td class="otd">&divide;</td>
            </tr>

            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td class="otd">&times;</td>
            </tr>

            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="otd">-</td>
            </tr>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td class="otd">+</td>
            </tr>

            <tr>
                <td colspan="2" class="rtd">0</td>
                <td>.</td>
                <td class="otd">=</td>
            </tr>
        </table>
    </form>
</div>
<style>
    .calculator{
        width:237px;
        height:326px;
        border:1px solid #5c5c5c;
    }

    table td{
        background-color: #d7d7d7;
        font-size: 24px;
        text-align: center;
        border:1px solid #000;
        margin:0px;
    }

    .display{
        background-color: #934a29;
        text-align: right;
        color: #fff;
        font-size: 30px;
        padding-right: 10px;
    }

    .otd{
        background-color: #fa9955;
        color:#fff;
    }
    .rtd{
        text-align: left;
        padding-left: 20px;
    }
</style>
</body>
</html>