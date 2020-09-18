<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="../../js/jquery.js"></script>
</head>
<body>



<div class="container-fluid lightbulb">
    <img id="bulb" src="../img/lightbulboff.png">
    <hr>
    <button id="turn_light_on" class="btn btn-success">Turn ON</button>
    <button id="turn_light_off" class="btn btn-danger">Turn OFF</button>
    <br>
</div>




<?php
require_once '../../inc/database.php';
$db = new \Database\database();
$search_type = $_GET['search_type']??'country';
$keyword = $_GET['keyword']??'Uzbekistan';
$airports = $db->sql("SELECT id, city, country, code FROM airports WHERE $search_type like '%$keyword%'");
?>

<div class="container-fluid">
    <h3>World Airports</h3>
    <div id="airports">
        <form>
            <p class="airport_search_form">
                Search: <input value="<?=$keyword?>" name="keyword" type="text" placeholder="Your airport name">
                By
                <select name="search_type">
                    <option value="city">City</option>
                    <option value="country">Country</option>
                    <option value="code">Code</option>
                </select>
                <button class="btn btn-success" type="submit">Search</button>
            </p>
        </form>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Country</th>
                <th>Code</th>
            </tr>
            <?foreach ($airports as $airport):?>
            <tr>
                <td><?=$airport['id'];?></td>
                <td><?=$airport['city'];?></td>
                <td><?=$airport['country'];?></td>
                <td><?=$airport['code'];?></td>
            </tr>
            <?endforeach;?>

        </table>
    </div>
</div>


<script>
    $(function () {

        $("#turn_light_on").click(function () {
            $("#bulb").attr('src','../img/lightbulbon.png');
            $(".lightbulb").css('background-color','red');
        });
        $("#turn_light_off").click(function () {
            $("#bulb").attr('src','../img/lightbulboff.png');
            $(".lightbulb").css('background-color','white');
        });

    })
</script>

<style>

    .lightbulb{
        background-color: white;
    }

    .lightbulb img{
        width:200px;
    }


    tr:hover td{
        background-color: #636363 !important;
        color: white;
        cursor: pointer;
    }

    tr:nth-child(even){
        background-color: #d5d5d5 !important;
    }
    th{
        background-color: #872315;
        color: #ffd16c;
    }
    td{
        border: 1px solid #2d6498;
    }
    .airport_search_form input::placeholder{
        color: red;
        padding-left: 30px;
    }
    .airport_search_form input{
        border: 1px solid #184c7d;
        border-radius: 15px;
        height: 50px;
        width: 460px;
    }
    .airport_search_form{
        text-align: center;
        color: whitesmoke;
    }
    .table th, .table td {
        border-top: 0px;
    }
    h3{
        text-align: center;
        color: #ffdd7c;
    }
    table{
        border-radius: 15px;
        background-color: whitesmoke;
    }
    body{
        background-color: #2d6498;
    }
</style>
</body>
</html>