<?php
namespace Amazon;
use Database\database;

include_once "../inc/database.php";
class Amazon{
    protected $db;
    public $parms;
    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database();
    }

    public function selectAirports(){
        $keyword = $this->parms['keyword']??'Uzbekistan';
        $selectby = $this->parms['selectby']??'country';
        return $this->db->sql("SELECT * FROM airports where $selectby like '%$keyword%'");
    }
}
$obj = new Amazon();
$airports = $obj->selectAirports();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div style="text-align: center">
    <h4>World Airports</h4>
    <form>
        <p>
            Search: <input name="keyword" type="text">
            By
            <select name="selectby">
                <option value="country">Country</option>
                <option value="city">City</option>
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
            <td><?=$airport['id'];?></td>
            <td><?=$airport['city'];?></td>
            <td><?=$airport['country'];?></td>
            <td><?=$airport['code'];?></td>

        </tr>

        <?php
    }
    ?>
</table>


<style>
    tr:first-child{
        background-color: #0f6674;
        color: white;

    }
</style>


</body>
</html>