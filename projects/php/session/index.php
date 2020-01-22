<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Class</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
$_SESSION["country"] = "Greece";
$_SESSION["state"] = "Anthen";
?>

<div class="container">
    <h4>Login Form</h4>
    <div id="loginform">
        <form method="post" action="login.php">
            <p>Email: <input name="email" type="email"></p>
            <p>Password: <input name="password" type="password"></p>
            <p>
                <button type="reset">Reset</button>
                <button type="submit">Login</button>
            </p>
        </form>
    </div>


    <a href="members.php">Members</a>
    <a href="logout.php">Logout</a>

</div>



</body>
</html>