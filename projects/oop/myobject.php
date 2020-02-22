<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<h1>Airports</h1>


<?php
include_once '../inc/database.php';
$db = new \Database\database();
$airports = $db->sql('select * from airports');
$users = $db->sql('select * from users');
?>


<table class="table table-responsive">
    <tr>
        <td>Name</td>
        <td>Country</td>
    </tr>

    <?php
        foreach ($airports as $airport) {
    ?>
            <tr>
                <td><?=$airport['city']?></td>
                <td><?=$airport['country']?></td>
            </tr>
    <?php
        }
    ?>

</table>

<style>
    table{
        background-color: #7abaff;
    }
    tr:first-child{
        background-color: #005cbf;
    }
</style>

</body>
</html>