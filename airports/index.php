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
        $aiports = $this->db->sql("SELECT * FROM airports where {$this->parms['selectBy']} LIKE '%{$this->parms['keyword']}%'");
        return $aiports;
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

    <h4 style="text-align: center">
        The world Aiports Directory
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