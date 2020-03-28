<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Basic Calculator</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery.js"></script>
    <script src="js/myscripts.js"></script>
</head>
<body>
<div class="title">MYITEDU Calculator</div>
<div id="calculator">


    <table class="table table-bordered">
        <tr>
            <td class="result" colspan="4">0</td>
        </tr>
        <tr>
            <td data-num="reset" class="signs">AC</td>
            <td data-num="+/-" class="signs">&#43;/&#8722;</td>
            <td data-num="%" class="signs">&#37;</td>
            <td data-num="/" class="orange_td">&#247;</td>
        </tr>
        <tr>
            <td data-num="7">7</td>
            <td data-num="8">8</td>
            <td data-num="9">9</td>
            <td data-num="*" class="orange_td">&#215;</td>
        </tr>
        <tr>
            <td data-num="4">4</td>
            <td data-num="5">5</td>
            <td data-num="6">6</td>
            <td data-num="-" class="orange_td">&#8722;</td>
        </tr>
        <tr>
            <td data-num="1">1</td>
            <td data-num="2">2</td>
            <td data-num="3">3</td>
            <td data-num="+" class="orange_td">&#43;</td>
        </tr>
        <tr>
            <td data-num="0" colspan="2">0</td>
            <td data-num=".">.</td>
            <td data-num="=" class="orange_td">&#61;</td>
        </tr>
    </table>
</div>
</body>
</html>