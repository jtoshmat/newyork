<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JQuery Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="calc">
        <form name="form">
              <input class="calc-display">
        </form>
        <table>
            <tr>
                <td><input type="button" value="C" onclick="c()"></td>
                <td><input type="button" value="/" onclick="insrt('/')"></td>
                <td><input type="button" value="<" onclick="del()"></td>
                <td><input type="button" value="X" onclick="insrt('*')"></td>
            </tr>
            <tr>
                <td><input type="button" value="7" onclick="insrt(7)"></td>
                <td><input type="button" value="8" onclick="insrt(8)"></td>
                <td><input type="button" value="9" onclick="insrt(9)"></td>
                <td><input type="button" value="-" onclick="insrt('-')"></td>
            </tr>
            <tr>
                <td><input type="button" value="4" onclick="insrt(4)"></td>
                <td><input type="button" value="5" onclick="insrt(5)"></td>
                <td><input type="button" value="6" onclick="insrt(6)"></td>
                <td><input type="button" value="+" onclick="insrt('+')"></td>
            </tr>
            <tr>
                <td><input type="button" value="1" onclick="insrt(1)"></td>
                <td><input type="button" value="2" onclick="insrt(2)"></td>
                <td><input type="button" value="3" onclick="insrt(3)"></td>
                <td rowspan=2><input type="button" value="=" onclick="eql()" style="height: 158px; background-color: orange"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="button" value="0" onclick="insrt(0)" style="width: 158px"></td>
                <td><input type="button" value="." onclick="insrt('.')"></td>
            </tr>
        </table>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>