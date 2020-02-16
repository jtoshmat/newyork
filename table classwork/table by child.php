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
<div class="box"></div>
<div class="container-fluid">
    <h1>Fill up the form</h1>
    <form>
        <table class="table table-bordered">
            <tr>
                <td><label>First Name</label></td>
                <td><input type="text" placeholder="First PLholder"></td>
            </tr>
            <tr>
                <td><label>Last name</label></td>
                <td><input type="text" placeholder="Secnd PLholder"></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><input type="text" placeholder="email PLholder"></td>
            </tr>
            <tr>
                <td><label>phone Name</label></td>
                <td><input type="number" placeholder="phone PLholder"></td>
            </tr>
            <tr>
                <td><label> Age</label></td>
                <td><input type="number" placeholder="Age PL"></td>
            </tr>
            <tr>
                <td><label>SSN</label></td>
                <td><input type="number" placeholder="SSN PLh"></td>
            </tr>
            <tr>
            <td colspan="2">
                <button class="btn btn-success">SUbmit</button>
                <button class="btn btn-dark">quit</button>
            </td>
            </tr>
        </table>
    </form>
</div>
<Style>
    .box {
        height: 100px;
    }
    body {
        background-color: #300a36;
    }
    .container-fluid {
        width: 40%;
        height: 400px;
    }
    table {
        background-color: #4d0000;
        border: 3px solid black !important;
    }
    label {
        color: blue;
    }
    h1 {
        text-align: center;
        color: blue;
    }
    td {
        border: 0px !important;
    }
    td:first-child {
        text-align: right;
    }
    td:last-child {
        text-align: center;
    }
    td:nth-child(2) {
        text-align: left;
    }
</Style>
</body>
</html>