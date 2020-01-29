<?php
namespace Seattle;
use Database\database;

include_once '../inc/database.php';
class Myairports{
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

$obj = new Myairports();
$airports = $obj->displayAirports();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My first project</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <h2>World Airports</h2>

    <div class="airports">
        <form>
            <p>Search: <input type="text" name="keyword">
                By:
                <select name="searchtype">
                <option value="city">City</option>
                <option value="country">Country</option>
                <option value="code">Code</option>
                </select>
                <button>Search</button>
            </p>
        </form>
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
        <div class="mypagination">
            <a class="page-item" href="#"> << </a>
            <a class="page-item" href="#">1</a>
            <a class="page-item" href="#">2</a>
            <a class="page-item" href="#">3</a>
            <a class="page-item" href="#">4</a>
            <a class="page-item" href="#"> >> </a>
        </div>
    </div>

</div>
<style>

    table tr:first-child td{
        background-color: #0b18ff;
    }

    .page-item {
        background-color: white;
        border-radius: 5px;
        margin: 3px;
        padding: 3px;
        padding-right: 10px;
        padding-left: 10px;
        border: 1px solid #ff1673;

    }

    .mypagination {
        text-align: center;
        padding-bottom: 30px;
    }

    body {
        background-color: #2b2b2b;
    }

    h2 {
        text-align: center;
        font-family: "American Typewriter";
        color: #c42943;
    }

    form {
        padding-top: 25px;
    }

    .airports {
        background-color: #420006;
        color: #ffe12e;
        text-align: center;
    }

    table td {
        color: #ffe12e;
    }


    table{
        background-color: #ff0b0b54;
    }

</style>
</body>
</html>