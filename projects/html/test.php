<?php
namespace Ford;
use Database\database;

include_once "../inc/database.php";
class Car{
    private $db;

    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
    }

    public function displayAirports(){
        $countries = $this->parms['country'];
        return $this->db->sql("SELECT * FROM airports where country like '%$countries%'");
    }

    public function getCountries(){
        return $this->db->sql("SELECT * FROM airports group by country");
    }
}

$obj = new Car();
$airports = $obj->displayAirports();
$countries = $obj->getCountries();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML and CSS</title>

    <script src="../js/jquery-3.4.1.min.js"></script>

</head>
<body>

<div class="myform">
    <form>
        <p>Display By
        <select id="countries">
            <?php
            foreach ($countries as $country) {
                $select = null;
                if ($country['country'] == $obj->parms['country']){
                    $select = "selected";
                }
                ?>


                <option <?=$select?> value="<?=$country['country']?>"><?=$country['country']?></option>



                <?php
            }
            ?>
        </select>
        </p>
    </form>
</div>

<table>
    <tr>
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

<script>
    $(function () {
        $("#countries").change(function () {
            var country = $(this).val();
            document.location = "test.php?country="+country;
        })
    });
</script>

<style>

    .myform{
        width:100%;
        text-align: center;
    }

    table{
        width: 90%;
        color: #000049;
        margin: auto;
    }
    td{
        text-align: center;
    }

    tr:first-child{
        background-color: #4b0019 !important;
        color: #ffd044;
        height:40px;
    }

    tr{
        background-color: #d5d6e8;
    }

</style>

</body>
</html>