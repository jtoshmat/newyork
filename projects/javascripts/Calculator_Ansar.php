<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator_Ansar</title>
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
        background-color: black;
        border: 1px solid #060606;
        width: 24.5%;
        height: auto;
        border-radius: 5px;
        margin-left: 200px;
        margin-top: 40px;
    }

    .text{
        background-color: #454545;
        border: none;
        width: 100%;
        height: 85px;
        color: white;
        text-align: right;
        font-size: 35px;


    }

    .buttons{
        background-color: #595959;
        width: 55px;
        height: 55px;
        border: none;
        color: white;
        padding: 0 px;
    }

    .button{
        background-color: #737373;
        width: 55px;
        height: 55px;
        padding:0px;
        margin:0px;
        border:none;
        font-size: 20px;
        color: white;
    }
    .button3{
        background-color: orange;
        width: 55px;
        height: 55px;
        padding: 0px;
        margin: 0px;
        border:none;
        color: white;
        font-size: 20px;


    }

    .button4{
        background-color: orange;
        width: 55px;
        height: 55px;
        padding:0px;
        margin:0px;
        border:none;
        color: white;
        font-size: 20px;
        border-bottom-right-radius: 5px;

    }

    .button2{
        background-color: #737373;
        width: 100%;
        height: 55px;
        border:none;
        color: #fdfdfd;
        font-size: 20px;
        border-bottom-left-radius: 5px;
    }




</style>



</body>
</html>