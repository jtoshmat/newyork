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
    <h4>Welcome to Brooklyn Digital Library!</h4>
    <hr>
    <?if (isset($_GET['msg'])):?>
    <div class="alert alert-success"><?=$_GET['msg']?></div>
    <?endif;?>
    <form method="post" action="may26.php">
        <p>
            <label> Full Name: </label><input class="form-control" name="full_name" placeholder="Your Full Name">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>

    </form>
</div>


</body>
</html>