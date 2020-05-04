<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
</head>
<body>

<?php
include_once 'uber.php';
$result = new \UberLLC\Uber();
$status = $result->accept_job();

if (!$status['error']) {
    echo "<div class='alert alert-danger'>".$status['msg']."</div>";
} else {
    echo "<div class='alert alert-success'>".$status['msg']."</div>";
}
?>
</body>
</html>




