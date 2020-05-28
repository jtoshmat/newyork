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
<div class="container-fluid">
    <h4>Assalomu alaykum!</h4>
    <hr>
    <? if (isset($_GET['msg'])): ?>
        <div class="alert alert-succes"><?= $_GET['msg'] ?></div>
    <? endif; ?>
    <form method="post" action="may20.php">
        <p>
            <label>Yoshingiz?:</label><input class="form-control" name="age" placeholder="Your age">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>


</div>
</body>
</html>

