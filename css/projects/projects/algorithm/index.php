<?php
namespace Samarkand;
session_start();

include_once '../../inc/database.php';
class MyLogin{
    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new \Database\database();
        $this->parms = $_POST;
    }

    public function validateUser(){
        $username = $this->parms['email']??null;
        $password = $this->parms['password']??null;
        $check = false;
        if ($username && $password){
            $sql = "SELECT id FROM users where email='$username' and password='$password'";
            $check =  $this->db->sql($sql);
        }
        return $check;
    }
}
$token = $_POST['_token']??null;
$msg = null;
$class = 'alert-success';
if (is_numeric($token)){
    $obj = new MyLogin();
    if (!empty($obj->validateUser())){
        $msg = "You are logged in successfully";
    }else{
        $class = 'alert-danger';
        $msg = "Your login failed";
    }
}



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="mylogin">
    <h3>User Login</h3>
    <?php
    if ($msg) {
        ?>
        <div class="alert <?= $class ?>"><?= $msg ?></div>
        <?php
    }
    ?>
    <form method="post">
        <table class="table">
        <tr>
            <td><label>Username:</label></td>
            <td><input required="required" name="email" type="email" placeholder="Email Address"></td>
        </tr>

        <tr>
            <td><label>Password:</label></td>
            <td><input required="required" name="password" type="password" placeholder="Your Password"></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="hidden" name="_token" value="2234234234">
                <button class="btn btn-dark" type="reset">Reset</button>
                <button class="btn btn-success" type="submit">Login</button>
            </td>
        </tr>

    </table>
    </form>
</div>
<style>

    table td input{
        width: 200px;
        height: 35px;
        border-radius: 3px;
        border: 1px solid #c8c8c8;
    }

    table td:first-child{
        text-align: right;
        padding-right: 5px;
        font-weight: bolder;
        color: #53290f;
    }
    table td:last-child{
        text-align: left;
        padding-left: 5px;
    }

    table tr:last-child td{
        text-align: center;
    }
    body{
        background-color: #1d395b;
    }


    .mylogin{
        width: 500px;
        height: 300px;
        background-color: whitesmoke;
        margin: auto;
        margin-top: 70px;
        text-align: center;
    }

</style>
</body>
</html>