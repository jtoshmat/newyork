<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Calculator</title>
    <link rel="stylesheet" href="/css/bootstrap.css"
    <script src="/js/jquery.js"></script>
</head>
<body>
<div class="container">
    <div id="calculator">
        <h4 class="mytitle">My calculator</h4>
        <table class="table table-bordered">
            <tr>
                <th class="display_area" colspan="4">
                    0
                </th>
            </tr>
            <tr>
                <td>AC</td>
                <td>&plus;/&minus;</td>
                <td>&percnt;</td>
                <td>&divide;</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>x</td>
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
                <td>&plus;</td>
            </tr>
            <tr>
                <td colspan="2">0</td>
                <td>&dot;</td>
                <td>&equals;</td>
            </tr>
        </table>
    </div>
</div>
<style>
    .mytitle {
        text-align: center;
    }

    td:hover {
        background-color: #b6b7b8;
        cursor: pointer;
    }

    tr td:last-child {
        background-color: #fd8d0f !important;
    }

    tr td:last-child:hover {
        background-color: #eb7c0f !important;
    }

    tr:nth-child(2) td {
        background-color: #494a4d;
    }

    th {
        background-color: #4e5052;
        color: white;
        text-align: right;
        font-size: 200%;
    }

    td {
        background-color: #757677;
        color: white;
        text-align: center;
        font-size: 130%;
        width: 30px;
    }

    .container {
        background-color: whitesmoke;
        padding: 10px;
        margin: 50px auto;
    }

    body {
        background-color: #0a1630;
    }
</style>
<script>
    $(function () {
    alert("asddd");
    });
</script>
</body>
</html>