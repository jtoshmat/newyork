<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate_Ansar</title>
    <link href="/css/bootstrap.css" rel="stylesheet">



</head>
<body>

<div class="container">
    <div class="head">

    <form name="formheader">

         <input class="text">
          <table class="mytable">
            <tr>
                <td><input class="buttons" type="button" value="AC"></td>
                <td><input class="buttons" type="button" value="+/-"></td>
                <td><input class="buttons" type="button" value="%"></td>
                <td><input class="button3" type="button" value="&divide;"></td>
            </tr>

            <tr>
                <td><input class="button" type="button" value="7"></td>
                <td><input class="button" type="button" value="8"></td>
                <td><input class="button" type="button" value="9"></td>
                <td><input class="button3" type="button" value="&times;"></td>
            </tr>

            <tr>
                <td><input class="button" type="button" value="4"></td>
                <td><input class="button" type="button" value="5"></td>
                <td><input class="button" type="button" value="6"></td>
                <td><input class="button3" type="button" value="-"></td>
            </tr>

            <tr>
                <td><input class="button" type="button" value="1"></td>
                <td><input class="button" type="button" value="2"></td>
                <td><input class="button" type="button" value="3"></td>
                <td><input class="button3" type="button" value="+"></td>
            </tr>

            <tr>
                <td colspan="2"><input class="button2" type="button" value="0"></td>
                <td><input class="button" type="button" value="."></td>
                <td><input class="button4" type="button" value="="></td>
            </tr>
        </table>

    </form>
    </div>
</div>


<style>

    .head {
        border: 1px solid #060606;
        width: 23.1%;
        height: auto;
        border-radius: 5px;
        margin-left: 200px;
        margin-top: 50px;
    }

    .text{
        background-color: #454545;
        border: none;
        margin: 0 px;
        width: 100%;
        height: 85px;
        color: white;
        text-align: -webkit-right;
        font-size: 35px;

    }

    .buttons{
        background-color: #595959;
        width: 50px;
        height: 50px;
        border: none;
        color: white;
        padding: 0 px;
    }

    .button{
        background-color: #737373;
        width: 50px;
        height: 50px;
        border:none;
        font-size: 20px;
        color: white;
    }
    .button3{
        background-color: orange;
        width: 50px;
        height: 50px;
        color: white;
        font-size: 20px;

    }

    .button4{
        background-color: orange;
        width: 100%;
        height: 50px;
        color: white;
        font-size: 20px;
    }

    .button2{
        background-color: #737373;
        width: 100%;
        height: 50px;
        color: white;
        font-size: 20px;
    }

    .mytable td {
        border:  solid black 1px;
        box-shadow: 0.5px 0.5px 0.5px 0.5px  black;
    }

</style>



</body>
</html>