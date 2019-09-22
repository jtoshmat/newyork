<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script>

    </script>
    <style>
        .main{
            background-color: #898a8b;
            margin-top:100px;
            margin-left:200px;
            width:248px;
            border-radius:4px;
        }

        .textview{
            height:100px;
            margin:3px;
            margin-bottom:0px;
            width:244px;
            background-color:#898a8b;
            border:none;
            font-size:25px;
        }
        .button{
            width:60px;
            height:60px;
            padding:0px;
            margin:0px;
            border-radius:0.1px;
            border:none;
            background-color: #d6d6d6;
            font-size:25px;


        }
        .button4{
            width:60px;
            height:60px;
            padding:0px;
            margin:0px;
            border-radius:0.1px;
            border:none;
            background-color: #f39248;
            font-size:25px;
            border-bottom-right-radius:3px;
            color:white;
        }
        .button3{
            width:60px;
            height:60px;
            padding:0px;
            margin:0px;
            border-radius:0.1px;
            border:none;
            background-color: #f39248;
            font-size:25px;
            color:white;
        }
        .button2{
            width:122px;
            height:60px;
            border-radius:0.1px;
            border-bottom-left-radius:3px;
            background-color: #d6d6d6;
            font-size:25px;

        }
    </style>
</head>
<body>
<div class="main">
    <form name="form">
        <input class="textview">
        <table>
            <tr>
                <td><input class="button"type="button" value="C"></td>
                <td><input class="button"type="button" value="+/-"></td>
                <td><input class="button"type="button" value="%"></td>
                <td><input class="button3"type="button" value="/"></td>
            </tr>
            <tr>
                <td><input class="button"type="button" value="7"></td>
                <td><input class="button"type="button" value="8"></td>
                <td><input class="button"type="button" value="9"></td>
                <td><input class="button3"type="button" value="*"></td>
            </tr>
            <tr>
                <td><input class="button"type="button" value="4"></td>
                <td><input class="button"type="button" value="5"></td>
                <td><input class="button"type="button" value="6"></td>
                <td><input class="button3"type="button" value="-"></td>
            </tr>
            <tr>
                <td><input class="button"type="button" value="1"></td>
                <td><input class="button"type="button" value="2"></td>
                <td><input class="button"type="button" value="3"></td>
                <td><input class="button3"type="button" value="+"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="button2"type="button" value="0"></td>
                <td><input class="button"type="button" value="."></td>
                <td><input class="button4"type="button" value="="></td>

            </tr>
        </table>
    </form>
</div>

</body>
</html>


