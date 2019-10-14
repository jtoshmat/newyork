<?php
namespace HotelReservations;
include_once "../inc/database.php";
include_once "validation.php";
include_once "verification.php";

use Database\database;

class Hotel extends database implements \validation
{
    private $db;
    public $parameters;
    use \verification;

    //Entry point of our class
    public function __construct()
    {
        $this->db = new database();
        $this->parameters = $_GET;
        $this->checkInputs();
    }

    public function checkInputs()
    {
        $this->parameters['keyword'] = strip_tags($this->parameters['keyword']); //Filters out unnecessary symbols in search
    }

    //Retrieves search result from database and shows to the user
    public function userInput(){
        $reservation = $this->db->sql("SELECT * FROM hotel_reservations where {$this->parameters['selectBy']} LIKE '%{$this->parameters['keyword']}%'");
        return $reservation;
    }

    //Interface method
    public function validateUser()
    {
        return false;
    }
}

//Instantiates our functions above
$hotel = new Hotel();
$reservation = $hotel->userInput();

if (!$hotel->verifyUserAuthentication()){          //Checks for access level
    return "Please leave this page immediately";
}
?>

<!-- HTML part begins-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"1000
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Reservations</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">

    <h3 style="text-align: left">
        Hotel Search
    </h3>
    <div class="hotelSearch">
        <form style="text-align: left">
            <p>Search: <input value="<?= $hotel->parameters['keyword'] ?? NULL ?>" name="keyword" type="text"> <!-- Accepts user input -->
                <select name="selectBy">
                    <option value="name">Name</option>
                    <option value="location">Location</option>
                    <option value="rate">Rate</option>
                </select>

                <button>Go</button>
            </p>
        </form>
    </div>

    <div class="basicTable">
        <table class="table-bordered">
            <tr>
                <td>Name</td>
                <td>Location</td>
                <td>Rate</td>
            </tr>


            <?php

            //Takes our variable $reservation assigns to alias $hotels and displays results based on name, location, and rate filters
            foreach ($reservation as $hotels) {
                ?>

                <tr>
                    <td><?= $hotels['name'] ?></td>
                    <td><?= $hotels['location'] ?></td>
                    <td><?= $hotels['rate'] ?></td>

                </tr>

                <?php
            }
            ?>
        </table>
    </div>
</div>
<style>

    tr:first-child {
        background-color: #919da9;
        color: #2a2730;
        border-radius: 1px;
    }

    body{
        background-image: url("https://image.freepik.com/free-photo/interior-bedroom-space-furniture-background-white-decoration-minimal-hotel-wa_42090-783.jpg");
        background-repeat: no-repeat;
        background-

    }

</style>

</body>
</html>
