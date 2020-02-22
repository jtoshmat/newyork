<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="loginform">
    <form method="post" action="loginform.php">
        <table class="table">
            <tr>
                <th colspan="2"><h4>Members Login Form</h4></th>
            </tr>
            <tr>
                <td><label>Username: </label></td>
                <td><input required="required" name="email" type="email" placeholder="Your Username"></td>
            </tr>
            <tr>
                <td><label>Password: </label></td>
                <td><input required="required" name="password" type="password" placeholder="Your Password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="reset">Reset</button>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<style>

    input{
        width: 250px;
        height: 40px;
        border-radius: 5px;

    }

    tr:nth-child(2) td:first-child {
        text-align: right;
        padding-right: 5px;
        width: 42%;
    }
    tr:nth-child(3) td:first-child {
        text-align: right;
        padding-right: 5px;
        width: 42%;
    }

    tr:nth-child(2) td:last-child {
        text-align: left;
        padding-right: 5px;
    }
    tr:nth-child(3) td:last-child {
        text-align: left;
        padding-right: 5px;
    }


    td:last-child {
        text-align: center;
    }

    th {
        text-align: center;
    }

    .table th, .table td {
        border-top: none;
    }

    body {
        background-color: #204369;
    }

    .loginform {
        width: 700px;
        margin: auto;
        background-color: #e6f3f5;
        margin-top: 100px;
        border-radius: 15px;
    }


</style>

</body>
</html>