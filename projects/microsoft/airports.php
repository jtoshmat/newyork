<?php
namespace Microsoft;
use Database\database;

include_once "../inc/database.php";
class Airport{
    protected $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
    }

    public function selectAirports(){
        $keyword = $this->parms['keyword']??'Uzbekistan';
        $selectby = $this->parms['searchby']??'country';

        return $this->db->sql("SELECT * FROM airports where $selectby like '%$keyword%'");
    }

}

$obj = new Airport();
$airports = $obj->selectAirports();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World Airports</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div class="topmenu">
        <h1>World Airports</h1>
        <form>
            <p>
                <label>Search: </label><input name="keyword" type="text" placeholder="Your keyword">
                By:
                <select name="searchby">
                    <option value="country">Country</option>
                    <option value="city">City</option>
                    <option value="code">Code</option>
                </select>
                <button type="submit" class="btn btn-success">Search</button>
            </p>
        </form>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>


        <?php
        foreach ($airports as $airport) {
            ?>
            <tr>
                <td><?=$airport['id']?></td>
                <td><?=$airport['city']?></td>
                <td><?=$airport['country']?></td>
                <td><?=$airport['code']?></td>
            </tr>

            <?php
        }
        ?>


    </table>
</div>

<style>
    body {
        background-color: #3b0919;
        color: #ffd355;
    }

    table {
        background-color: #ffe2dd;
    }

    table th, td {
        color: #3b0919;
    }

    tr:first-child {
        background-color: #517fff;
    }

    .topmenu {
        text-align: center;
    }

    tr:nth-child(even){
        background-color: #e0dcff;
    }
</style>

</body>
</html>