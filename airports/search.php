<?php
namespace Flights;
class Reservation
{
    public $parms;

    public function __construct()
    {
        $this->parms = $_GET;

    }

    public function searchFlight(){
        return "You are searching from:". $this->parms['from'];

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
    <title>Flight search result</title>
    <link href="../css/bootstrap.css" rel="stylesheet">

</head>
<body>
<h3 style="text-align: center">Fligh Search results</h3>
<hr>
<p style="text-align: center">From: <?=$flights->parms['from']?> To: <?=$flights->parms['to']?></p>
<p style="text-align: center">Departure Date: <?=$flights->parms['departure_date']?> Arrival Date: <?=$flights->parms['arrival_date']?></p>

<div class="flight_result">
    <div class="photo col">
        <img src="https://compote.slate.com/images/222e0b84-f164-4fb1-90e7-d20bc27acd8c.jpg" style="width: 25%">

    </div>
    <div class="desc col">
        <p>Flight Info</p>
        <p>Flight price</p>
        <p>Flight rating</p>
    </div>
    <div class="flight_result">
    <div class="photo col">
        <img src="https://compote.slate.com/images/222e0b84-f164-4fb1-90e7-d20bc27acd8c.jpg" style="width: 25%">

    </div>
    <div class="desc col">
        <p>Flight Info</p>
        <p>Flight price</p>
        <p>Flight rating</p>
    </div>
    <div class="flight_result">
    <div class="photo col">
        <img src="https://compote.slate.com/images/222e0b84-f164-4fb1-90e7-d20bc27acd8c.jpg" style="width: 25%">

    </div>
    <div class="desc col">
        <p>Flight Info</p>
        <p>Flight price</p>
        <p>Flight rating</p>
    </div>
    <div class="flight_result">
    <div class="photo col">
        <img src="https://compote.slate.com/images/222e0b84-f164-4fb1-90e7-d20bc27acd8c.jpg" style="width: 25%">

    </div>
    <div class="desc col">
        <p>Flight Info</p>
        <p>Flight price</p>
        <p>Flight rating</p>
    </div>


</div>
<style>
    .col{
        float: left;
        width: 50%;
        height: 150px;
        border: 1px solid black;
    }
</style>

</body>
</html>
