<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/calculator_scripts.js" type="text/javascript"></script>

</head>
<body>
<h4>My Basic Calculator</h4>
<div class="main">

    <form name="form">
        <input class="textview">
        <table>
            <tr>
                <td><input class="button resetbtn" type="button" value="C"></td>
                <td><input class="button" type="button" value="+/-"></td>
                <td><input class="button operator" type="button" value="%"></td>
                <td><input class="button3 operator" type="button" value="&divide;"></td>
            </tr>
            <tr>
                <td><input class="button numbers" type="button" value="7"></td>
                <td><input class="button numbers" type="button" value="8"></td>
                <td><input class="button numbers" type="button" value="9"></td>
                <td><input class="button3 operator" type="button" value="&times;"></td>
            </tr>
            <tr>
                <td><input class="button numbers" type="button" value="4"></td>
                <td><input class="button numbers" type="button" value="5"></td>
                <td><input class="button numbers" type="button" value="6"></td>
                <td><input class="button3 operator" type="button" value="-"></td>
            </tr>
            <tr>
                <td><input class="button numbers" type="button" value="1"></td>
                <td><input class="button numbers" type="button" value="2"></td>
                <td><input class="button numbers" type="button" value="3"></td>
                <td><input class="button3 operator" type="button" value="+"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="button2 numbers" type="button" value="0"></td>
                <td><input class="button" type="button" value="."></td>
                <td><input class="button4 executebtn" type="button" value="="></td>

            </tr>
        </table>
    </form>
</div>

</body>
</html>


