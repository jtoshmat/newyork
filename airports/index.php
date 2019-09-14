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

<?php

$sortby = $_GET['sortby']??'id';
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'country';

use Database\database;

include_once "../inc/database.php";
$db = new database();

if ($keyword){
    $airports = $db->sql("select * from airports where $field like '%$keyword%'");
}else {
    $airports = $db->sql('select * from airports where country ="Uzbekistan" order by ' . $sortby . ' desc');
}
?>

<div class="container">
    <h3>The world aiports</h3>

    <div class="searchform">
        <form method="get" action="index.php">
            <p>
                <input name="keyword" type="text">
                <select name="field">
                    <option value="country">Country</option>
                    <option value="city">City</option>
                    <option value="details">Details</option>
                </select>
            <button type="submit">Search</button>
            </p>
        </form>
    </div>

    <table class="table">
        <tr>
            <td><a href="http://newyork.local/airports/index.php?sortby=id">ID</a></td>
            <td><a href="http://newyork.local/airports/index.php?sortby=city">City</a></td>
            <td><a href="http://newyork.local/airports/index.php?sortby=country">Country</a></td>
            <td><a href="http://newyork.local/airports/index.php?sortby=code">Code</a></td>
        </tr>

        <?php
        foreach ($airports as $airport) {
            ?>

            <tr>
                <td><?=$airport['id']?></td>
                <td><?=$airport['city']?></td>
                <td><?=$airport['country']?></td>
                <td><?=$airport['code']?></td>
            </tr>

            <?php
        }
        ?>

    </table>
</div>


<style>
.searchform{
    width:80%;
    margin: auto;
    text-align: center;
}

    table{
        background-color: #fff1fd;
        box-shadow: #622b2c 5px 5px 5px 5px;
        border-radius: 15px;
    }

    tr:first-child{
        background-color: #b60000;
        color: #ffe4a8;
    }

    table a {
        color: #fff1c2;
    }
</style>

</body>
</html>