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
<div class="container-fluid">
    <form method="post" action="applicationform.php">
        <div class="myform">
            <div style="height: 20px"></div>
            <div class="myform2">
                <div class="mynav">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Data Loading</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Data Validation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Steam Model Operation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Ply Split Operation</a>
                        </li>
                    </ul>
                </div>
                <div class="section1">
                    <div class="mydivp">
                        <fieldset class="fieldset1">
                            <legend>Step 1: Load Collar Data</legend>
                            <div>

                                <p>
                                    <label for="name">Select Collar file (.csv): </label>
                                    <input required="required" type="text" id="name" value="">
                                    <button>Browse</button>
                                </p>
                                <p>
                                    <label for="name">Select Format file (.sff): </label>
                                    <input required="required" type="text" id="name" value="">
                                    <button>Browse</button>
                                </p>
                            </div>
                        </fieldset>
                        <fieldset class="fieldset2">
                            <legend>Step 2: Load/Validate Sample Data</legend>

                            <table class="table">
                                <tr>
                                    <td>Data Type</td>
                                    <td>Sample Data File (.csv)</td>
                                    <td>Form File</td>
                                    <td>Validate Only</td>
                                    <td>Update-new</td>
                                </tr>
                                <tr>
                                    <td><input value="SURVEY" disabled class="fl2input1"></td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                </tr>
                                <tr>
                                    <td><input value="LITHO" disabled class="fl2input1"></td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                </tr>
                                <tr>
                                    <td><input value="QUAL" disabled class="fl2input1"></td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input required="required" class="fl2input">
                                        <button class="fl2btn">...</button>
                                    </td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                    <td><input class="fl2checkbox" type="checkbox"></td>
                                </tr>
                            </table>

                        </fieldset>
                        <fieldset class="fieldset1">
                            <legend>Step 3: Load Seam Interval Data</legend>
                            <div>

                                <p>
                                    <label for="name">Select Interval file (.csv): </label>
                                    <input required="required" type="text" id="name" value="">
                                    <button>Browse</button>
                                </p>
                                <p>
                                    <label for="name">Select Format file (.sff): </label>
                                    <input required="required" type="text" id="name" value="">
                                    <button>Browse</button>
                                </p>
                            </div>
                            <table class="table fl3table">
                                <tr>
                                    <td><input class="fl3checkbox" type="checkbox"></td>
                                    <td>Tick to check IB Thickness</td>
                                    <td>Max Merge Thinkness</td>
                                    <td><input class="fl3input" value="0.05"></td>
                                </tr>
                                <tr>
                                    <td><input class="fl3checkbox" type="checkbox"></td>
                                    <td colspan="2">
                                        Overwite and Append (uncheck to Overwrite Existing)
                                    </td>

                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                            <div class="clearfix"></div>

                        </fieldset>
                        <div class="allbuttons">
                            <button disabled>Save Defaults</button>
                            <button type="submit">Get Defaults</button>
                            <button disabled>Load All</button>
                            <button type="reset">Quit</button>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 80px;"></div>
        </div>
    </form>
    <style>
        .allbuttons{
            border:1px solid #6b5d5d;
            padding:10px;
        }
        .allbuttons button {
            margin-right: 80px;
        }

        .allbuttons {
            margin-top: 10px;
            width: 687px;
            text-align: center;
            float: left;
        }

        .fl3table td {
            padding: 0px !important;
        }

        .fl3input {
            width: 55px !important;
            height: 25px !important;
        }

        .fl3checkbox {
            width: 13px !important;
        }

        .fl3table td:nth-child(1) {
            text-align: right;
        }

        .fl3table td:nth-child(2) {
            text-align: left;
            padding-left: 3px !important;
        }

        .fl3table td:last-child {
            text-align: right;
        }

        .fl3table {
            width: 67%;
            float: right;
            margin-right: 20px;
        }

        .fl2btn {
            height: 30px;
            font-size: 12px;
        }

        .fl2input {
            height: 30px;
            font-size: 12px;
        }

        .fl2input1 {
            width: 70px;
            background-color: #ece9e9;
        }

        .table th, .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 0px;
            border-top: 0px;
        }

        .f2cols {
            width: 20%;
            float: left;
        }

        .mydivp {
            font-size: 12px;
        }

        .fieldset1 button {
            height: 30px;
            width: 65px;
        }

        .fieldset1 input {
            width: 430px;
            height: 30px;
            font-size: 12px;
        }

        .fieldset1 p {
            text-align: center;
        }

        .fieldset1 {
            width: 70%;
        }

        .fieldset2 {
            width: 100%;
        }

        legend {
            display: block;
            padding-inline-start: 2px;
            padding-inline-end: 2px;
            border-width: initial;
            border-style: none;
            border-color: initial;
            border-image: initial;
            width: auto;
            font-size: 14px;
            color: black;
        }

        fieldset {
            display: block;
            margin-inline-start: 2px;
            margin-inline-end: 2px;
            padding-block-start: 0.35em;
            padding-inline-start: 0.75em;
            padding-inline-end: 0.75em;
            padding-block-end: 0.625em;
            min-inline-size: min-content;
            border-width: 1px;
            border: 1px solid black;
            border-style: groove;
            border-color: threedface;
            border-image: initial;
        }

        .mydivp {
            padding-left: 10px;
        }

        .myform2 {
            width: 96%;
            margin: auto;
            margin-left: 20px;
            margin-top: 20px;

        }

        a {
            color: #433f38;
        }

        .mynav {
            width: 95%;
            margin-left: 10px;
        }

        .myform {
            width: 1030px;
            background-color: #f1f1f1;
            margin: auto;
            background-image: url("img/formbg.png");
            background-size: 100% 100%;
            background-repeat: no-repeat;

        }

        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            color: #495057;
            background-color: #e7e7e7;
            border-color: #dee2e6 #dee2e6 #fff;
        }
    </style>
</body>
</html>