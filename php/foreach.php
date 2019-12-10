<?php
namespace Toshmatov;
use Database\database;

include_once '../inc/database.php';
class Airports{

    protected $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function listAiports(){
        return $this->db->sql("select * from airports where country='Uzbekistan'");
    }

}

$obj =new Airports();
$airports = $obj->listAiports();
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
<table class="table table-bordered">
    <tr>
        <th>*</th>
        <th>ID</th>
        <th>City</th>
        <th>Country</th>
    </tr>

    <?php
        foreach($airports as $num=>$airport) {
        ?>
        <tr>
            <td><?=$num?></td>
            <td><?=$airports[$num]['id']?></td>
            <td><?=$airport['city']?></td>
            <td><?=$airport['country']?></td>
        </tr>

        <?php
    }
    ?>

</table>
</body>
</html>

