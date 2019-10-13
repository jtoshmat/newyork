<?php
namespace Transportation;

use Database\database;

include_once '../inc/database.php';

class Airport
{

    protected $db;

    public function __construct()
    {
        $this->db = new database();
    }


    public function getAiports()
    {
        return $this->db->sql("select * from airports limit 10");
    }

}

$obj = new Airport();
$airports = $obj->getAiports();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">

    <div class="airports">

        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>City</td>
                <td>Country</td>
                <td>Code</td>
            </tr>


            <?php
                  foreach ($airports as $airport) {
            ?>


                <tr>
                    <td><?= $airport['id'] ?></td>
                    <td><?= $airport['name'] ?></td>
                    <td><?= $airport['city'] ?></td>
                    <td><?= $airport['country'] ?></td>
                    <td><?= $airport['code'] ?></td>
                </tr>


            <?php
                }
            ?>


        </table>
    </div>

</div>

</body>
</html>