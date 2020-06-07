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
<?php
$parms = null;

if (isset($_POST['is_form_submitted']) && $_POST['is_form_submitted'] == 1){
    $parms = $_POST;
    $email = $parms['email']??null;
    $password = $parms['password']??null;

    if ($email == 'jon@jon.com' && $password=='password123'){
        $msg = "You are logged in sucessfully";
        header('Location: accounts.php?msg='.$msg);
    }else{
        $msg = "Your credentials are incorrect. Please try again";
        header('Location: login.php?msg='.$msg);
        exit;
    }

}

echo $parms

?>
<div class="container-fluid">
    <h2>Login Page</h2>

    <?if (isset($_GET['msg'])):?>
    <div class="alert alert-danger">
        <?=$_GET['msg'];?>
    </div>
    <?endif?>

    <form method="post" action="login.php">
        <table class="table">
            <tr>
                <td>Username: </td>
                <td><input required="required" name="email" type="email" placeholder="Your username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input required="required" name="password" type="text" placeholder="Your password"></td>
            </tr>
            <tr>
                <td class="last_td" colspan="2">
                    <input name="is_form_submitted" value="1" type="hidden">
                    <button class="btn btn-dark" type="reset">Reset</button>
                    <button class="btn btn-success" type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<style>
    .container-fluid{
        width: 600px;
        text-align: center;
        margin: 50px auto;
        background-color: #e0e0e0;
        border: 1px solid black;
    }
    .last_td{
        text-align: center;
    }
</style>
</body>
</html>