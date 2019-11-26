<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Javascrips Exercises</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

</head>
<body>

 <div class="container-fluid">
     <div id="mycalculator">
        <table class="table">
            <tr>
                <td class="display" colspan="4">0</td>
            </tr>
            <tr>
                <td>AC</td>
                <td>+/-</td>
                <td>%</td>
                <td>/</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>X</td>
            </tr>
            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>-</td>
            </tr>

            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>+</td>
            </tr>
            <tr>
                <td colspan="2">0</td>
                <td>.</td>
                <td>=</td>
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
}
</style>
<script src="js/scripts.js"></script>
</body>
</html>
