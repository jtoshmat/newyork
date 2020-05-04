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
<h1>Login form</h1>
<?php
if (isset($_GET['msg'])) {
    ?>
    <div class="alert alert-danger">
        <?= $_GET['msg'] ?? null ?>
    </div>
    <?php
}
?>
<div>
    <form method="post" action="backend.php">
       <p>
           <label for="username">Username</label>
           <input type="email" name="username">
       </p>

        <p>
            <label for="password">Password</label>
            <input type="password" name="password">
        </p>

        <p>
            <button type="submit">Submit</button>
        </p>

    </form>
</div>

</body>
</html>