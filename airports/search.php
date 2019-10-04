<?php
namespace Flights;

class Reservation
{

    public $parms;

    public function __construct()
    {
        $this->parms = $_GET;
    }

    public function searchFlights()
    {
        return "You are searching flights from: " . $this->parms['to'];
    }
}

$flights = new Reservation();
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

    <p style="text-align: center">From: <?=$flights->parms['from']?> To:  <?=$flights->parms['to']?></p>
    <p style="text-align: center">Departure: <?=$flights->parms['departure_date']?> | Arriving Date:  <?=$flights->parms['arriving_date']?></p>

    <div class="flightsresults">

        <div class="photos cols">
            <img src="https://news.delta.com/sites/default/files/777.gif">
        </div>
        <div class="descr cols">
            <p>Flight Information</p>
            <p>Flight Price</p>
            <p>Flight Ratings</p>
        </div>

        <div class="photos cols">
            <img src="https://news.delta.com/sites/default/files/777.gif">
        </div>
        <div class="descr cols">
            <p>Flight Information</p>
            <p>Flight Price</p>
            <p>Flight Ratings</p>
        </div>


        <div class="photos cols">
            <img src="https://news.delta.com/sites/default/files/777.gif">
        </div>
        <div class="descr cols">
            <p>Flight Information</p>
            <p>Flight Price</p>
            <p>Flight Ratings</p>
        </div>


        <div class="photos cols">
            <img src="https://news.delta.com/sites/default/files/777.gif">
        </div>
        <div class="descr cols">
            <p>Flight Information</p>
            <p>Flight Price</p>
            <p>Flight Ratings</p>
        </div>


    </div>

</div>

<style>
.cols{
    width:50%;
    float: left;
    border:1px solid black;
    height:150px;
}

    .photos img{
        width:100%;
    }
</style>

</body>
</html>
