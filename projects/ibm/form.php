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
    <form>
        <h3>Contact Us Form</h3>
        <table class="table">
            <tr>
                <td><label>First Name:</label></td>
                <td><input name="first_name" type="text" placeholder="First Name"></td>
            </tr>
            <tr>
                <td><label>Last Name:</label></td>
                <td><input name="last_name" type="text" placeholder="Last Name"></td>
            </tr>
            <tr>
                <td><label>Email Address:</label></td>
                <td><input name="email" type="email" placeholder="Email Address"></td>
            </tr>
            <tr>
                <td><label>Phone Number:</label></td>
                <td><input name="phone" type="tel" placeholder="Phone Number"></td>
            </tr>
            <tr>
                <td><label>Age:</label></td>
                <td><input name="age" type="number" placeholder="Your Age"></td>
            </tr>
            <tr>
                <td><label>SSN:</label></td>
                <td><input name="ssn" type="text" placeholder="Your SSN"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-dark">Reset</button>
                    <button class="btn btn-success">Submit</button>
                </td>
            </tr>
        </table>

    </form>
</div>

<style>

    td{
        border: 0px !important;
    }

    td:first-child{
        text-align: right;
    }

    td:last-child{
        text-align: center;
    }

    td:nth-child(2){
        text-align: left;
    }


    h3{
        color:white;
    }
    td{
        color: #ffe13a;
    }
    body{
        background-color: black;
    }
    form{
       width:50%;
        margin: auto;
    }
    table{
        background-color: #4c4c4c;
        border: 5px solid #98851c;
    }
</style>
</body>
</html>