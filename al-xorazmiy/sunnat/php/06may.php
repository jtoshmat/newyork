<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../fontawesome/css/all.css">
</head>
<body>
<?php
include 'backend06.php';
?>
<div class="container-fluid">
<form method="get">
    <p>
    <input value="<?=$zipcode?>" type="text" name="keyword" placeholder="Your zip code">
    <button type="submit">Search</button>
    </p>
</form>
<div class="results">
<table class="table table-bordered">
    <tr><td>City:</td><td><?=$weather->City?></td></tr>
    <tr><td>State:</td><td><?=$weather->State?></td></tr>
    <tr><td>TempF:</td><td><?=$weather->TempF?></td></tr>
    <tr><td>TempC:</td><td><?=$weather->TempC?></td></tr>
</table>
</div>
</div>
</body>
</html>
