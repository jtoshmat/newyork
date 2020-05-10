<?php
namespace Flights;
use Database\database;
include_once '../airports/database.php';
class Reservation
{
    public $parms;
    protected $db;

    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database();

    }

    public function searchFlight(){
        $results = $this->db->sql("SELECT * FROM expedia WHERE (from_city) like '%".$this->parms['from']."%'");
        return $results;
    }

}
$obj = new Reservation();
$flights = $obj->searchFlight();


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
                <input Value="<?=$_GET['from']??NULL?>" class="from-to" name="from" placeholder="From: City or Airport">
                <input Value="<?=$_GET['to']??NULL?>"class="from-to" name="to" placeholder="To: City or Airport">

                <select name="company" class="from-to">
                    <option value="Any">Any</option>
                    <option value="Uzbekistan Airways">Uzbekistan Airways</option>
                    <option value="Turkish Airlines">Turkish Airlines</option>
                    <option value="British Airlines">British Airlines</option>
                    <option value="Aeroflot">Aeroflot</option>
                </select>
                <select name="seat_class" class="from-to">
                    <option value="Economy">Economy class</option>
                    <option value="Business">Business class</option>
                    <option value="First">First class</option>

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
<p style="text-align: center">From: <?=$obj->parms['from']?> To: <?=$obj->parms['to']?> Company: <?=$obj->parms['company']?> Seat Class: <?=$obj->parms['seat_class']?></p>
<p style="text-align: center">Departure Date: <?=$obj->parms['departure_date']?> Arrival Date: <?=$obj->parms['arrival_date']?> Number of Adult: <?=$obj->parms['adult']?> Number of Child: <?=$obj->parms['child']?></p>

<table class="cols">
    <?php
    foreach ($flights as $flight) {
        ?>
        <tr>
            <td><img src="<?=$flight['img']?>" width=200" height="150"></td>
            <td>
                <?=$flight['time_period']?><br>
                <?=$flight['airplane']?><br>
                Very Good Flight (8.2/10)
            </td>
            <td>
                <?=$flight['duration_flight']?><br>
                <?=$flight['from_city']?> - <?=strtoupper($obj->parms['to'])?>
            </td>
            <td>
                4 left at $<?=$flight['price']?><br>
                roundtrip<br>
                Earn $21.59 bonus
            </td>
            <td>
                <a href="reservation_checkout.php?flight_id=<?=$flight['id']?>" class="subm btn" >Select</a>
            </td>
        </tr>
        <?php
    }
    ?>

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
