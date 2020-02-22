<?php
namespace Flights;

use Database\database;

include_once '../inc/database.php';

class Reservation222
{
    public $parms;
    protected $db;

    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database();
    }

    public function searchFlights2()
    {
        if (!isset($this->parms['from_city'])) {
            return false;
        }
        $results = $this->db->sql("select * from reservations");
        return $results;
    }
}


$flights = new Reservation();
$results = $flights->searchFlights();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flights Search Results</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <h3 style="text-align: center">Your Flights Search Results</h3>
    <hr>

    <p style="text-align: center">From: <?= $flights->parms['from_city'] ?> To: <?= $flights->parms['to_city'] ?></p>
    <p style="text-align: center">Departure: <?= $flights->parms['departure_date'] ?> | Arriving
        Date: <?= $flights->parms['arrival_date'] ?></p>
    <p style="text-align: center">Adults: <?= $flights->parms['adult'] ?> | Child: <?= $flights->parms['child'] ?></p>

    <div class="flightsresults">

        <table class="table">
            <?php
            foreach ($results as $result) {
                ?>
                <tr>
                    <td><img class="airlinesimage" src="<?=$result['image']?>">
                    </td>
                    <td>
                        <p>7:20pm - 2:45am</p>
                        <p>Aeroflot-Russian Airlines</p>
                        <p>Very Good Flight (7.6/10)</p>
                    </td>
                    <td>
                        <p>22h 25m (1 stop) Available amenitiesWi-Fi, Entertainment, and Power information</p>
                        <p>Departure airport:JFK - 9h in SVO Layover 9h in SVOArrival airport:- TAS</p>
                    </td>
                    <td>
                        $959.95 <br>
                        roundtrip <br>
                        Save $19.20 <br>
                    </td>
                    <td>
                        <button class="btn btn-primary">Book</button>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>


</div>

<style>

    body {
        background-color: grey;
    }

    td:first-child {
        text-align: center;
        border-right: 1px solid #adb5bd !important;
    }

    .airlinesimage {
        width: 200px;
        height: 100px;
        position: relative;
    }

    table td, th {
        border: none !important;
    }


    .flightsresults {
        background-color: white;
        height: auto;
        border-radius: 15px;
        border: none;
        box-shadow: black 5px 5px 5px 5px;
        font-size: 12px;
    }


    .col_left {
        float: left;
        width: 20%;
        border: 1px solid black;
    }

    .col_right {
        float: right;
        width: 78%;
        border: 1px solid black;
    }

    table{
        background-color: #fff;
    }

    tr, td{
        border-bottom: 4px solid black;
        margin-bottom: 10px !important;
        padding-bottom: 10px !important;
    }
</style>

</body>
</html>
