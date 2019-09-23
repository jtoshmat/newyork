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
<h3>Converter</h3>

<p>Type a value into the field below to convert it into kilometer:<br>
    <label>Mile:</label>
    <input id="inputMile" type="number" placeholder="Mile"
           oninput="myConverter(this.value)" onchange="myConverter(this.value)">
</p>

<p>Kilometers: <span id="outputKm"></span></p>

<script>
    function myConverter(valNum) {
        document.getElementById("outputKM").innerHTML = valNum / 0.62137;
    }
</script>
</body>

