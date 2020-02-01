<?php
namespace Airports;
include_once "../inc/database.php";
include_once "validateforms.php";
include_once "mytools.php";

use Database\database;

class Airport extends database implements \ValidateForms
{
    private $db;
    public $parms;
    use \MyTools;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
        $this->checkInputs();
    }

    public function checkInputs()
    {
       $this->parms['keyword'] = strip_tags($this->parms['keyword']);
    }

    public function getAirports()
    {
        $airports = $this->db->sql("SELECT * FROM airports where {$this->parms['selectBy']} LIKE '%{$this->parms['keyword']}%'");
        return $airports;
    }
}


$obj = new Airport();
$airports = $obj->getAirports();
if (!$obj->checkUserAuthentication()){
    die("Sorry, you are not a loggedin user");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Airports</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

<div class="container">
    <form method="get" action="reservation.php">

    <div>
        <p>
            <input class="from-to" name="from" placeholder="From: City or Airport">
        <input class="from-to" name="to" placeholder="To: City or Airport">
        </p>
        <p>
            <select name="company" class="from-to">
                <option value="Any">Any</option>
                <option value="uzbek">Uzbekistan Airways</option>
                <option value="turk">Turkish Airlines</option>
                <option value="british">British Airlines</option>
                <option value="aeroflot">Aeroflot</option>
            </select>
            <select name="seat_class" class="from-to">
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

        <div class="plane">
            <img src="../img/plane-512.png" style="width: 52%">
            Flight only
        </div>
        <div class="round">
            Roundtrip
        </div>

    <h4 style="text-align: center">
        The world Airports Directory
    </h4>
    <div class="mysearch">
        <form style="text-align: center">
            <p>Search: <input value="<?= $obj->parms['keyword'] ?? NULL ?>" name="keyword" type="text">
                <select name="selectBy">
                    <option value="name">Name</option>
                    <option value="city">City</option>
                    <option value="country">Country</option>
                </select>
                <button>Search</button>
            </p>
        </form>
    </div>

    <div class="mytable">
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>City</td>
                <td>Country</td>
            </tr>


            <?php
            foreach ($airports as $airport) {
                ?>

                <tr>
                    <td><?= $airport['id'] ?></td>
                    <td><?= $airport['name'] ?></td>
                    <td><?= $airport['city'] ?></td>
                    <td><?= $airport['country'] ?></td>

                </tr>

                <?php
            }
            ?>


        </table>
    </div>

</div>

<style>
    tr:first-child {
        background-color: #46060c;
        color: #ffe755;
    }
</style>

</body>
</html>