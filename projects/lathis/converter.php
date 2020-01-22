<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Converter</title>
    <link href="/css/bootstrap.css" rel="stylesheet"
</head>

<body>

<h3> Basic Converter </h3>
<p> Simple converter which converts mile to kilometer/meter/yard/foot.</p>

<!--Creates form that accepts number and assign it to id.   -->
<form>
    <input type="number" id="initial-amount" placeholder="Mile">


    <!--Creates conversion options and assigns values equal to 1 Mile -->
    <select id="range">
        <option disabled selected value="select"> select measurement</option>
        <option value="1.60934">Kilometer</option>
        <option value="1609.34">Meter</option>
        <option value="1760">Yard</option>
        <option value="5280">Foot</option>
    </select>
    <!--Input for displaying result -->
    <input type="text" placeholder="result" id="total-result">
</form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            <!--Selects id and adds event listener and relates to our function Calc and switchMeasurement which are created below -->
            document.getElementById('initial-amount').addEventListener('input', Calc);
            document.getElementById('range').addEventListener('change', switchMeasurement);

            <!--Creates function Calc assigns to variables and stores values -->
            function Calc() {
                let amount = document.getElementById('initial-amount').value;
                let convert = document.getElementById('range').value;

            <!--Calculation part -->
                if (convert == 'select') {
                    document.getElementById('total-result').setAttribute('placeholder', 'Please select measurement');
                } else {
                    let compute = amount * convert;
                    document.getElementById('total-result').value = compute;
                }

            }
            <!--Creates function which repeats same action as above and computes based on selected measurement -->
            function switchMeasurement() {
                let amount = document.getElementById('initial-amount').value;
                let convert = document.getElementById('range').value;

                let compute = amount * convert;
                document.getElementById('total-result').value = compute;
            }
        })
    </script>

    <style>
        #range {
            width: 30%;
            height: 30px;
            border-radius: 2px;
            text-align: center;
            margin: 1px;
            padding: 2px;
        }
    </style>