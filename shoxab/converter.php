<!DOCTYPE Html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Converter</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>

</head>
<body>

<div id="mybox">

<form action="converter.php" method="post">
    <h1 class="header">CONVERTER</h1>
    <table>
        <tr>
            <td><input type="number" name="number" required="required"></td>
            <td>
                <select name="Choose">
                    <option>Choose</option>
                    <option value="mile" id="mile">Mile </option>
                    <option value="km" id="km">Km</option>

                </select>
            </td>
            <td><input type="result"</td>
        </tr>
            <td>
                <input type="submit" value="Convert" id="convert">

            </td>
        <tr>



    </table>

</form>
</div>



    <style>
        #mybox {
            margin: auto;
            text-align: center;
            border: 5px solid black;
            padding-bottom: 150px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 50px;

        }
        #convert {
            margin-right: 189px;
            margin-top: 10px;
            margin-left: 20px;

        }



    </style>




</body>
</html>



