<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">

    <div class="myform">
        <div class="topdiv">
            <button class="btn btn-success">Home</button>
            <button class="btn btn-success">Search</button>
            <button class="btn btn-success">View Data</button>
            <button class="btn btn-success">Add User</button>
            <button class="btn btn-success">View User</button>
            <button class="btn btn-success">Logout</button>
        </div>
        <div class="bottomdiv">
            <div style="height: 100px"></div>

            <form method="get" action="form.php">
                <table>
                    <tr>
                        <td colspan="3">
                            <h5 style="text-align: center">Enter Your Details Below</h5>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="mylabels">First Name:</td>
                        <td class="myinputs"><input required="required" name="first_name" class="input-group" placeholder="Your first name" type="text"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Middle Name: </td>
                        <td class="myinputs"><input name="middle_name" class="input-group" placeholder="Your middle name" type="text"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Last Name:</td>
                        <td class="myinputs"><input required="required" name="last_name" class="input-group" placeholder="Your last name" type="text"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Email Address:</td>
                        <td class="myinputs"><input required="required" name="last_name" class="input-group" placeholder="Your email address" type="email"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Age:</td>
                        <td class="myinputs"><input required="required" name="age" class="input-group" placeholder="Your age" type="number"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td class="mylabels">Grade:</td>
                        <td class="myinputs"><input required="required" name="grade" class="input-group" placeholder="Your grade" type="number"></td>
                        <td class="myalerts"><span>*Required field</span></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td >
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="submit" class="btn btn-success">Submit Form</button>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </form>

        </div>

        </div>
    </div>

</div>


<style>

    .myalerts span{
        background-color: red;
        border-radius: 10px;
        padding: 5px 10px 4px 13px;
        margin-left: 5px;
        visibility: hidden;

    }

    td{
        text-align: left;
    }

    td input{
        margin-bottom: 17px;

    }

    .myinputs input{
    }

    .mylabels{
        text-align: center;

        font-weight: bolder;
    }

    .myinputs{
        text-align: left;
    }

    .bottomdiv table{
        width: 90%;
        margin: auto;
    }

    .btn-success{
        background-color: #5a9e21;
    }
    .topdiv button{
        margin: 10px;
    }
    .topdiv{
        text-align: right;
    }
.bottomdiv{
    background-color: #3986c6;
    width:98%;
    margin: auto;
    height: 527px;
}
    .myform{
        width:800px;
        height:600px;
        margin: auto;
        margin-top: 44px;
        background-color: #848284;
        border:1px solid black;
        box-shadow: #0c1e3d 5px 5px 5px 5px;
        color: black;
    }
    body{
        background-color: #000000;
        color: #ffcf57;
    }
</style>
<script>
    alert ("Welcome to our log in page!");
    document.write('Hello Umidochka');
    var name = prompt("What is your name?");
    

</script>
</body>
</html>