<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<form method="post" action="backend.php">
    <h2>Welcome to Login form!!!!</h2>
    <div class="alert alert-danger"><?=$_GET['msg']??null?></div>
    <p>
        <label for="username">Username</label>
        <input name="username" type="email" placeholder="Enter your email">
    </p>
    <p>
        <label for="password">Password</label>
        <input name="password" type="password" placeholder="Enter your password">
    </p>
    <p>
        <button name="reset">Reset</button>
        <button name="submit">Submit</button>

    </p>
</form>
</body>
</html>