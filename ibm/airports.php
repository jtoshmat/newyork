<?php
namespace December;
include_once '../inc/database.php';
use Database\database;

class Restaraunt{
    protected $db;
    public $parms;

    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database();
    }

    public function displayAirports(){
        $keyword = $this->parms['keyword']??'Uzbekistan';
        $searchtype = $this->parms['searchtype']??'country';
        $sql = "SELECT * FROM airports WHERE $searchtype like '%{$keyword}%'";
        return $this->db->sql($sql);
    }
}

$obj = new Restaraunt();
$airports = $obj->displayAirports();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The world airports</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class="airports">
        <div class="searchform">
            <h4>The World Airports</h4>
            <form>
                <p>
                    Search: <input value="<?=$obj->parms['keyword']?>" name="keyword" type="text" placeholder="Your keyword">
                    By:
                    <select name="searchtype">
                        <option value="city">City</option>
                        <option value="country">Country</option>
                        <option value="code">Code</option>
                    </select>
                    <button>Search</button>
                </p>
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>City</td>
                <td>Country</td>
                <td>Code</td>
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
</div>
<style>
    tr:first-child td{
        background-color: #209149;
        font-weight: bolder;
    }
    .searchform{
        text-align: center;
    }
    body{
        background-color: #9ae9ff;
    }
    table{
        background-color: #400000;
        margin: auto;
        width: 90% !important;

    }
    td{
        color: #ffe12f;
    }
</style>
</body>
</html>