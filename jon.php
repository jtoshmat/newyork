<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div style="height: 60px"></div>
    <div class="myform">
        <h2>Contact Form</h2>
        <br>
        <form>
            <table class="table mytable">
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input class="myinputs" name="first_name" type="text" placeholder="Your First Name"></td>
                </tr>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input class="myinputs" name="first_name" type="text" placeholder="Your First Name"></td>
                </tr>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input class="myinputs" name="first_name" type="text" placeholder="Your First Name"></td>
                </tr>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input class="myinputs" name="first_name" type="text" placeholder="Your First Name"></td>
                </tr>
                <tr>
                    <td><label>First Name:</label></td>
                    <td><input class="myinputs" name="first_name" type="text" placeholder="Your First Name"></td>
                </tr>
                <tr>
                    <td style="text-align: center" colspan="2">
                        <button class="btn btn-dark" type="reset">Reset</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <style>

        .table th, .table td {
            border-top: none;
        }

        .myform label{
            font-weight: bolder;
        }


        .myform td:last-child{
            text-align: left;
        }

        .myform td:first-child{
            text-align: right;
        }

        .myinputs{
            width: 80%;
            border: 1px solid darkgrey;
            border-radius: 3px;
            height: 38px;
            padding:5px;
            padding-left: 10px;
        }


        body{
            background-color: #4a250e;
        }


        .myform{
            width: 700px;
            height: auto;
            margin: auto;
            background-color: #f6f8f6;
            border: 1px solid grey;
            text-align: center;
            border-radius: 20px;
        }

    </style>
</div>


</body>
</html>