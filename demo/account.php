<?php
session_start();
$user_logged_in = $_SESSION['user_logged_in']??false;
if (!$user_logged_in){
    header("Location: login.php?msg=Sorry, you are not authorized to see this page");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<h3>Member Account Detail</h3>
<h4>Welcome <?=$_SESSION['user_full_name']?></h4>
<p>
    <nav>
        <a href="dashboard.php"> Home </a> |
        <a href="account.php"> Account </a> |
        <a href="logout.php"> Logout </a>
    </nav>
</p>
<div>
    <img src="https://www.handsonbanking.org/financial-education/wp-content/uploads/2012/10/bank_statement.png">
</div>
<style>
    img{
        width: 100%;
    }
</style>

<script>
    $(function () {
        $('a[href$="logout.php"]:first').click(function () {
            var ask = confirm("Are you sure you want to logout from the session?");
            if (!ask){
                return false;
            }
        });
    })
</script>


</body>
</html>