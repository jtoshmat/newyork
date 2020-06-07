<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>I LOVE JAVASCRIPTS!</title>
    <script src="jquery-3.4.1.js" type="text/javascript"></script>
</head>
<body>
<div id="mybox">

    <h3>Currency Calculator</h3>
        <p>From:
            <select id="cur_type1">
                <option value="dollar">USD</option>
                <option value="ruble">RUD</option>
                <option value="som">UZS</option>
                <option value="mexican peso">MXN</option>
            </select>


            To:
            <select id="cur_type2">
                <option value="dollar">USD</option>
                <option value="ruble">RUD</option>
                <option value="som">UZS</option>
                <option value="peso">MXN</option>
            </select>

            <br>
            <input required="required" id="amount" type="number" name="currency1" placeholder="Currency 1">
            <button id="calc_btn">Calculate</button>
        </p>

        <p id="output">
                Output:
        </p>




</div>

<style>
#mybox{
    background-color: #414141;
    color: #e2f2ff;
    border: 1px solid #004085;
    width:100%;

    padding:5px;
}

    #output{
        background-color: #abdde5;
        border-radius: 6px;
        color: #f00;
        padding:5px;
    }

</style>
<script src="myscripts.js"></script>
</body>
</html>