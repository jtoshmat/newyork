<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My PHP Project</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="myform">
        <h3>My Contact Form</h3>
        <form method="post" action="backend.php">
            <table class="mytable">
                <tr>
                    <td>First Name:</td>
                    <td><input name="first_name" type="text" placeholder="First Name"></td>
                </tr>

                <tr>
                    <td>Last Name:</td>
                    <td><input name="last_name" type="text" placeholder="Last Name"></td>
                </tr>

                <tr>
                    <td>Age:</td>
                    <td><input name="age" type="num" placeholder="age"></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="email" placeholder="Your Email Address"></td>
                </tr>

                <tr>
                    <td>Are you a full time member?</td>
                    <td>
                        <select name="myoptions">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Your Message:
                    </td>
                    <td>
                        <textarea name="message">
                        </textarea>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<style>

    .myform table{
        width: 400px;
        background-color: #d6f3f9;
        border: 1px solid black;
    }

    table td{
        padding:10px;
    }

    tr:last-child td{
        text-align: center;
        border-top: 1px solid black;
    }

</style>
</body>
</html>