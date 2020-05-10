<?php
namespace Flights;
use Database\database;
include_once '../airports/database.php';
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


<div class="container1">
    <form method="get">

        <div>
            <p>
                <input class="from-to" name="from" placeholder="From: City or Airport">
                <input class="from-to" name="to" placeholder="To: City or Airport">

                <select name="company" class="from-to">
                    <option value="Any">Any</option>
                    <option value="uzbek">Uzbekistan Airways</option>
                    <option value="turk">Turkish Airlines</option>
                    <option value="british">British Airlines</option>
                    <option value="aeroflot">Aeroflot</option>
                </select>
                <select class="from-to">
                    <option value="economy">Economy class</option>
                    <option value="business">Business class</option>
                    <option value="first">First class</option>

                </select>

            </p>
            <a>Departure <a>Return </a><a>Adult </a><a>Child</a></a>
            <p>
                <input class="dep-ar" type="date" name="departure_date">
                <input class="dep-ar" type="date" name="arrival_date">
                <select class="dep-ar" name="adult">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <select class="dep-ar" name="child">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

            </p>

            <button class="button" type="submit">Search</button>


            <div class="round">
                Roundtrip
            </div>


        </div>
    </form>
</div>




<h3 style="text-align: center">Fligh Search results</h3>
<hr>
<p style="text-align: center">From: <?=$flights->parms['from']?> To: <?=$flights->parms['to']?></p>
<p style="text-align: center">Departure Date: <?=$flights->parms['departure_date']?> Arrival Date: <?=$flights->parms['arrival_date']?></p>

<table class="cols">
    <tr>
        <td><img src="../img/aeroflot%20plane.jpg" width=200" height="150"></td>
        <td>
            3:40pm - 11:10pm<br>
        Aeroflot-Russian Airlines<br>
        Very Good Flight (8.2/10)
        </td>
        <td>
            16h 30 min (1 stop) <br>
            Tas - 1h 25min SVO - JFK
        </td>
        <td>
            4 left at $719.50<br>
            roundtrip<br>
            Earn $21.59 bonus
        </td>
        <td><button class="subm" type="submit">Select</button></td>
    </tr>
</table>



    <style>
        .subm {
            width: 89%;
            height: 29%;
            border-radius: 4px 4px;
            font-weight: 900;
            background-color: #c70807;
            color: #fff;
        }
        .subm:hover {
            width: 91%;
            height: 31%;
            border-radius: 4px 4px;
            font-weight: 900;
            background-color: #a10606;
            color: #fff;
        }
        tr {
            background-color: #fff;
            border-radius: 5px 5px;

        }

        .cols{
        margin-left: 15%;
            width: 70%;
        }

    .cols tr td{


        height: 150px;
    }
     body{
         background-color: #d6d8db;
         background-size: cover;
         background-repeat: no-repeat;
     }
    .container1{
        background-color: #05122a;
        height: 200px;
        position: relative;
        top: 10px;
        padding-top: 10px;
        border-radius: 5px 5px;
        color: white;
        opacity: 0.8;
        margin: auto;
        padding-left: 8%;
        width: 85%;

    }
    .round{
        background-color: #004a97;
        width: 80px;
        height: 35px;
        padding-top: 3px;
        text-align: center;
        border-radius: 2px;
        position: relative;
        font-family: "Arial Narrow";
        font-weight: bold;
        color: white;
        left: 3px;
        bottom: 370px;
    }
    .from-to{
        width: 40%;
        border-radius: 3px 3px;
    }
    .dep-ar{
        border-radius: 3px 3px;
        width: 19%;
        margin-right: 12px;

    }
    .button{
        width: 20%;
        text-align: center;
        border-radius: 3px 3px;
        background-color: #c8e4ce;

    }
    a{
        padding-right: 16%;
        position: relative;

    }
        h3{
            padding-top: 40px;
        }


</style>

</body>
</html>
