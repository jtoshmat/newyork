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
<div class="empty" style="height: 50px"></div>
<h1>Fill up the form</h1>
<div class="container-fluid">
    <form>
        <table class="table table-bordered">
            <tr>
                <td><label>First Name</label></td>
                <td><input name="First_name" type="text" placeholder="First Name"></td>
            </tr>
            <tr>
                <td><label>Last Name</label></td>
                <td><input name="Last_name" type="text" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td><label>Email Adress</label></td>
                <td><input name="Email_Adress" type="text" placeholder="Email Adress"></td>
            </tr>
            <tr>
                <td><label>Phone Number</label></td>
                <td><input name="Phone Number" type="text" placeholder="Phone Number"></td>
            </tr>
            <tr>
                <td><label>Age</label></td>
                <td><input name="Age" type="number" placeholder="Age"></td>
            </tr>
            <tr>
                <td><label>SSN</label></td>
                <td><input name="SSN" type="Number" placeholder="SSN"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn-dark">Reset Form</button>
                    <button class="btn-success">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<style>
    table {
        background-color: #0c1e3d;
        border: 5px solid #fff729 !important;
    }
    h1 {
        text-align: center;
        color: #fff729;
    }
    body {
        background-color: #0c0211;
    }
    .container-fluid {
        margin: auto;
        width: 40%;
    }
    td {
        color: #fff729;
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
</style>
</body>
</html>