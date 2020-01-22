<?php
namespace Chicago;
use Database\database;

include_once '../inc/database.php';
class Aiports{

    private  $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAirports(){
        return $this->db->sql("SELECT * FROM airports WHERE country = 'Uzbekistan'");
    }
}

$obj = new Aiports();
$aiports = $obj->getAirports();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aiports Lists</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>City</td>
            <td>Country</td>
        </tr>

        <?php
        foreach ($aiports as $aiport) {
            ?>
            <tr>
                <td><?=$aiport['id']?></td>
                <td><?=$aiport['city']?></td>
                <td><?=$aiport['country']?></td>
            </tr>

            <?php
        }
        ?>


    </table>
</div>
<style>
    tr:first-child{
        background-color: #5d2120;
        color: #fff020;
    }
    tr:nth-child(even){
        background-color: #903575;
    }
    tr:nth-child(odd){
        background-color: #ffd9e0;
        color: #15843b;
    }

</style>
</body>
</html>
