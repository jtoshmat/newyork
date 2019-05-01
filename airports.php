<!DOCTYPE html>
<html>
<head>
    <title>Uzbekiston airportlarini informatsiyasi</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>


<?php
    include 'inc/database.php';
    $airports = $db->sql("select * from airports where country_abbr = 'BR'");
?>

<table class="table table-responsive table-bordered">

    <tr class="tr1">
        <td>ID</td>
        <td>City</td>
        <td>Country</td>
    </tr>


    <?php
        foreach ($airports as $airport) {
            ?>
            <tr>
                <td><?=$airport['id']?></td>
                <td><?=$airport['city']?></td>
                <td><?=$airport['country']?></td>
            </tr>
            <?php
        }
    ?>


</table>

<style>
    .tr1{
        background-color: #005cbf;
    }
</style>

</body>
</html>