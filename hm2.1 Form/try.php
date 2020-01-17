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
    <table>
        <tr>
            <td class="th">Data Loading</td>
            <td class="th">Data Validation</td>
            <td class="th">Seam Model Operation</td>
            <td class="th">Ply Split Operation</td>
            <td class="th">Select Bh</td>
        </tr>
    </table>
        <fieldset>
        <table class="table1">

            <legend>Step 1: Load Collar Data</legend>
            <tr class="tr1">
                <td class="td1">Select Collar file (.csv) <input type="text"> <button class="longinput">Browse...</button></td>
            </tr>
            <tr>
                <td class="td1">Select Format file (.sff) <input type="text"> <button class="longinput">Browse...</button></td>
                <td class="button"></td>
            </tr>
        </table>
                <td><button class="button"> Load All</button></td>
        </fieldset>

</div>
<style>
    .container-fluid {
        width: 75%;
        height: 800px;
        background-color: #ededed;
        margin: auto;
    }
    legend {
        display: block;
        padding-inline-start: 2px;
        padding-inline-end: 2px;
        border-width: initial;
        border-style: none;
        border-color: initial;
        width: auto;
        font-size: 14px;
    }
    fieldset {
        width: 70%;
        height: 100px;
        display: block;
        margin-inline-start: 2px;
        margin-inline-end: 2px;
        padding-block-start: 0.35em;
        padding-inline-start: 0.75em;
        padding-inline-end: 0.75em;
        padding-block-end: 0.65em;
        min-inline-size: min-content;
        border-width: 1px;
        border: 2px solid black;
        border-style: groove;
        border-color: threedface;
        border-image: initial;
        background-color: #ededed;
    }
    .th {
        font-size: 15px;
        margin-right: 50px;
    }
</style>
</body>
</html>