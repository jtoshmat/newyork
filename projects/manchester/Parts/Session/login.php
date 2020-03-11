<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>

<form method="post" action="backend_page.php">
    <h1>Login form</h1>
    <div class="alert alert-danger"><?=$_GET['msg']??null?></div>
    <p>
        <label for="username">Username: </label>
        <input name="username" type="email" placeholder="Enter your username">
    </p>
    <p>
        <label for="password">Password: </label>
        <input name="password" type="password" placeholder="Enter your password">
    </p>

    <p>
        <button name="Reset">Reset</button>
        <button name="Login">Login</button>
    </p>
</form>
</body>
</html>