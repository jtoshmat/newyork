<?php
namespace Dadaboeva;
use Database\database;

include_once "../inc/database.php";
class Airport{
    protected $db;
    public $parms;
    public $parms2;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
        $this->parms2 = $_POST;
        if (count($this->parms2)){
            return $this->deleteAirports($this->parms2);
        }
    }
    public function displayAirports(){
        $keyword = $this->parms['keyword']??'Uzbekistan';
        $selectby = $this->parms['selectby']??'country';
        $sortby = $this->parms['sortby']??'city';
        $sortby2 = $this->parms['sortby2']??'desc';
        $sql = "SELECT * FROM airports WHERE $selectby like '%$keyword%' order by $sortby $sortby2";
        return $this->db->sql($sql);
    }

    public function deleteAirports($aids){
        echo "<pre>";
        var_dump($aids);
        exit ("The following airport(s) has been deleted");
    }
}
$obj = new Airport();
$airports = $obj->displayAirports();
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
    <div class="myairport">
        <h2>The world aiports</h2>
        <form name="form1">
            <p>
                Search: <input name="keyword" type="text"> By:
                <select name="selectby">
                    <option value="city">City</option>
                    <option value="country">Country</option>
                    <option value="code">Code</option>
                </select>
                Sort by:
                <select name="sortby">
                    <option value="city">City</option>
                    <option value="country">Country</option>
                    <option value="code">Code</option>
                </select>
                   <select name="sortby2">
                    <option value="asc">asc</option>
                    <option value="desc">desc</option>
                </select>
                <button type="submit">Search</button>
            </p>
        </form>
        <form name="form2" method="post">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>City</th>
                <th>Country</th>
                <th>Code</th>
                <th>Action</th>
            </tr>

            <?php
            foreach ($airports as $airport) {
                ?>
                <tr>
                    <td><?=$airport['id']?></td>
                    <td><?=$airport['city']?></td>
                    <td><?=$airport['country']?></td>
                    <td><?=$airport['code']?></td>
                    <td>
                    <input name="aids[]" type="checkbox" value="<?=$airport['id']?>">
                    <input name="city[]" type="text">
                </td>
                </tr>

                <?php
            }
            ?>

                  <tr>
                    <td colspan="5">
<button type="submit">Delete</button>
</td>
                </tr>

        </table>
        </form>
    </div>

</div>
<style>
    tr:last-child{
    text-align: right;
    background-color: #175ff9 !important;
    }
    .myairport{
        text-align: center;
    }

    tr:first-child{
        background-color: #175ff9;
    }

    table{
        background-color: #ffe2dd;
    }

    tr:nth-child(even){
        background-color: #fff;
    }
</style>
</body>
</html>