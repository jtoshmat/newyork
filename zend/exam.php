<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="box">
    <h3>Log In Form</h3>
    <form class="myform" method="post" action="../zend/backend.php">
        <table class="inside">
       <tr>
           <td>First Name</td>
           <td><input name="firstname" type="text" placeholder="First Name"></td>
       </tr>
        <tr>
            <td>Last Name</td>
            <td><input name="lastname" type="text" placeholder="Last Name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" type="email" placeholder="alex@gmail.com"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input name="phone" type="tel" placeholder="***-***-****"></td>
        </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<style>
    .box{
        width: 450px;
        height: 700px;
        border: 1px solid black;
        background-color: #6d0e10;
        margin: auto;
        margin-top: 50px;
    }
    .myform{
        margin-top: 40px;
    }
    table td{
        padding: 10px;
    }
    td:first-child{
        padding-left: 60px;
        color: #ffbe39;
    }
    h3{
        text-align: center;
        color: #ffbe39;
        margin-top: 70px;
    }
    td:last-child{
        text-align: center;
        margin-top: 30px;
    }


</style>
</body>
</html>
