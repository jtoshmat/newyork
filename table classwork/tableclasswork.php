<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="emptybox"></div>
<table>
    <tr>
        <th class="th1"></th>
        <th class="th" style="background-color: #ef69be">Element A</th>
        <th class="th" style="background-color: #1f619c">Element B</th>
        <th class="th" style="background-color: #00c500">Element C</th>
        <th class="th" style="background-color: #ffc927">Element D</th>
    </tr>
    <tr>
        <td class="tr1" id="textwhite" style="background-color: #ef69be">Variation A</td>
        <td class="tr1">AA</td>
        <td class="tr1">BA</td>
        <td class="tr1">CA</td>
        <td class="tr1">DA</td>
    </tr>
    <tr>
        <td class="tr1" id="textwhite" style="background-color: #1f619c" >Variation B</td>
        <td class="tr1">AB</td>
        <td class="tr1">BB</td>
        <td class="tr1">CB</td>
        <td class="tr1">DB</td>
    </tr>
    <tr>
        <td class="tr1" id="textwhite" style="background-color: #00c500" >Variation C</td>
        <td class="tr1">AC</td>
        <td class="tr1">BC</td>
        <td class="tr1">CC</td>
        <td class="tr1">DC</td>
    </tr>
    <tr>
        <td class="tr1" id="textwhite" style="background-color: #ffc927">Variation D</td>
        <td class="tr1">AD</td>
        <td class="tr1">BD</td>
        <td class="tr1">CD</td>
        <td class="tr1">DD</td>
    </tr>
    <tr>
        <td class="tr1" id="textwhite" style="background-color: #6e6e6e">Variation E</td>
        <td class="tr1">AE</td>
        <td class="tr1">BE</td>
        <td class="tr1">CE</td>
        <td class="tr1">DE</td>
    </tr>
</table>
</div>
<style>
    .container-fluid {
        width: 70%;
        margin: auto;
    }
    table {
        margin: auto;
    }
    table tr td {
        background-color: white;
        border: 2px solid grey;
        font-size: 35px;
        height: 75px;
        text-align: center;
    }
    #textwhite {
        color:white;
    }
    .th {
        font-size: 35px;
        color: white;
        width: 200px;
        height: 75px
    }
    .th1 {
        color: white;
        width: 200px;
        height: 75px;
    }
    .tr1 {
        background-color: #bfb9b7;
    }
    .emptybox {
        height: 200px;
    }
</style>
</body>
</html>