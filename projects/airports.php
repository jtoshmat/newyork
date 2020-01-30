<!DOCTYPE html>
<html>
<head>
    <title>Uzbekiston airportlarini informatsiyasi</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>

<?php
include_once 'inc/header.php';
?>

<?php
include 'inc/database.php';
$keyword = $_GET['keyword'] ?? 'Uzbekistan';
$airports = $db->sql("select * from airports where country like '" . $keyword . "%' ");


//'%%' -- kaerda bulmasin
//'a%' - hamma a harfi bilan boshlanadigan davlat
//'%a' - hamma a harfi bilan tugadidan davlatlar toping

?>

<form>
    <br>
    <p>Search: <input name="keyword" type="text" value="<?= $keyword ?>">
        <input type="submit" value="Search">
    </p>
</form>

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
            <td><?= $airport['id'] ?></td>
            <td><?= $airport['city'] ?></td>
            <td><?= $airport['country'] ?></td>
        </tr>
        <?php
    }
    ?>


</table>

<?php
if (count($airports) == 0) {
    echo "No airport is found by that search criteria";
}
?>

<style>
    .tr1 {
        background-color: #005cbf;
    }
</style>

</body>
</html>