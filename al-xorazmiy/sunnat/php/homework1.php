<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<?if(isset($_GET['msg'])):?>
<div class="alert alert-info"><?=$_GET['msg']?></div>
<?endif;?>
<form method="post" action="homework1back.php">
    <label>your age:</label><br>
    <input name="age" type="number"><br>
    <label>when u came to America:</label><br>
    <input name="usa" type="number"><br>
    <button class="btn btn-success">Submit</button>
</form>
<style>
    form{
        position: relative;
        left: 300px;
    }
    .alert{
        text-align: center;
        color: #0e661a;
    }
    .btn{
        margin-top: 10px;
        position: relative;
        left: 48px;
    }
</style>
</body>
</html>
