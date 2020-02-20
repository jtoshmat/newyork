<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="emptybox"></div>
<fieldset class="container-fluid">
    <div class="emptybox"></div>
    <table>
    <tr>
        <td class="th">Data Loading</td>
        <td class="th">Data Validation</td>
        <td class="th">Seam Model Operation</td>
        <td class="th">Ply Split Operation</td>
        <td class="th">Select Bh</td>
        <td class="th">Model Creation</td>
        <td class="th">Model Cut</td>
        <td class="th">Model Section & Report</td>
    </tr>
    </table>
    <div class="emptybox"></div>
    <table>
    <table class="center">
        <fieldset>
            <legend>Step 1: Load Collar Data</legend>
        Select Collar file (.csv)<input  class="longinput" type="text"> <input type="button" value="Browse..."> <br><br>
        Select Format file (.sff)<input  class="longinput" type="text"> <input type="button" value="Brows..."> <br><br>
        <input class="buttoncenter" type="button" value="Load Collar Data">
        </fieldset>
    </table>

        <fieldset>
            <legend>Step 2: Load/Validate Sample Data(including Survey()verticality.Litho.Quality) </legend>
            <table>
                <tr>
                <td>Data Type</td>
                <td>Sample Data File (.csv)</td>
                <td>Format File(.sff)</td>
                <td>Validate Only</td>
                    <td>Update-New</td>
                </tr>
                <tr>
                    <td><input class="inputs" disabled value="SURVEY"></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="checks" type="checkbox"></td>
                    <td><input class="checks" type="checkbox"></td>
                </tr>
                <tr>
                    <td><input class="inputs" disabled value="LITHO"></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="checks" type="checkbox"></td>
                    <td><input class="checks" type="checkbox"></td>
                </tr>
                <tr>
                    <td><input class="inputs" disabled value="QUAL"></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="checks" type="checkbox"></td>
                    <td><input class="checks" type="checkbox"></td>
                </tr>
                <tr>
                    <td><input class="inputs" disabled value=""></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="inputs" type="text">
                        <button class="buttons">...</button></td>
                    <td><input class="checks" type="checkbox"></td>
                    <td><input class="checks" type="checkbox"></td>
                </tr>
            </table>
            <input class="buttons" type="button" value="Load/Validate Simple Data">
            <input class="buttons" type="button" value="Clear All">
        </fieldset>
        <fieldset>
            <legend>Step 3: Load Seam Interval Data</legend>
            Select Seam  file  (.csv)   <input  class="longinput" type="text"> <input type="button" value="..."> <br><br>
            Select Format file (.csf)  <input  class="longinput" type="text"> <input type="button" value="..."> <br><br>
            <input class="checks" type="checkbox"> Tick to check
            <input class="checks" type="checkbox">
            <input class="buttoncenter" type="button" value="Load Seam Data">
        </fieldset>
        <fieldset class="bottom">
            <button class="lastbuttons">Save Defaults</button>
            <button class="lastbuttons">Get Defaults</button>
            <button class="lastbuttons">Load All</button>
            <button class="lastbuttons">Quit</button>
        </fieldset>
    </form>
</fieldset>
<style>
    body {
        background-color: #ededed;
        width: 85%;
        height: 750px;
        margin: auto;
    }
    .center {
        margin: auto;
        color: red;
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
        width: 75%;
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
    }
    .longinput {
        width: 500px;
        border-style: solid;
        border-width: 2px 0px 0px 2px;
    }
    .emptybox {
        height: 20px;
        }
    .inputs {
        border-style: solid;
        border-width: 2px 0px 0px 2px;
        margin: auto;
    }
    .lastbuttons {
        margin: 0 auto;
        width: 15%;
    }

</style>
</body>
</html>