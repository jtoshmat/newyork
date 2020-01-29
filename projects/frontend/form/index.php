<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php

$color = $_GET['color']??'red';
echo "
<style>
body{
background-color: $color;
}
</style>
";
?>

<div class="container">
    <div id="myform">
        <form method="post">
            <table class="table">
                <tr>
                    <td colspan="2">
                        <h3>Contact Form</h3>
                    </td>
                </tr>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input required="required" name="first_name" type="text"></td>
                </tr>
                <tr>
                    <td><label>Last Name:</label></td>
                    <td><input required="required" name="last_name" type="text"></td>
                </tr>
                <tr>
                    <td><label>Email Address:</label></td>
                    <td><input required="required" name="email" type="email"></td>
                </tr>
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input required="required" name="phone" type="tel"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-light" type="reset">Reset</button>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>
<style>
    td {
        border: none !important;
    }

    #myform tr:first-child td {
        text-align: center;
    }

    #myform tr:last-child td {
        text-align: center;
    }

    #myform td:first-child {
        text-align: right;
    }

    #myform input[type="text"], input[type="email"], input[type="tel"] {
        width: 100%;
        border-radius: 5px;
        border: 1px solid #545d12b8;
        box-shadow: #a28116 1px 1px 0px 0px;
    }

</style>
</body>
</html>