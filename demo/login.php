<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<form method="post" action="backend.php">
    <h4>Login Form</h4>

    <?php
    if (isset($_GET['msg'])) {
        ?>
        <div class="alert alert-danger"><?= $_GET['msg'] ?? null ?></div>
        <?php
    }
    $username = $_COOKIE['username']??null;
    ?>
    <p>
        <label>Username: </label>
        <input value="<?=$username?>" name="username" type="email" placeholder="Your Username">
    </p>
    <p>
        <label>Password: </label>
        <input value="" name="password" type="password" placeholder="Your Password">
    </p>
    <p><label>Remember me: </label><input class="checkbox" type="checkbox" name="remember_me" value="1"></p>
    <p>
        <button type="reset">Reset</button>
        <button type="submit">Submit</button>
    </p>
</form>

<style>
    .checkbox{
        width: 20px;
        height: 20px;
        border: 1px solid black;
        margin: 5px;
    }
</style>
</body>
</html>