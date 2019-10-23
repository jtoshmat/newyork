<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="jpystyle.css"/>
        <script src="jquery-3.4.1.js" type="text/javascript"> </script>
        <title>JPY to USD</title>
        <div id="headname">
            <p>CONVERT FOREIGN CURRENCY</p>
        </div>
    </head>
    <body>
        <div id="mainbox">
            <p>From:
                <select id="cur_type1">
                    <option value="dollar">USD</option>
                    <option value="yen">JPY</option>
                </select>
                To:
                <select id="cur_type2">
                    <option value="yen">JPY</option>
                    <option value="dollar">USD</option>
                </select>
                <br>
                <input required="required" id="amount" type="number" name="currency" placeholder="Amount of Currency">
                <button id="calculate">Calculate</button>
            </p>
            <p id="output">
                Output:
            </p>
        </div>
        <script src="jpyscripts.js"></script>
    </body>
</html>
