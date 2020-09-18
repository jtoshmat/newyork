<?php
namespace Dynamictable;

use Database\database;

include_once '../../../inc/database.php';

class Display
{

    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getRecords()
    {
        return $this->db->sql("SELECT * FROM airports where country='Uzbekistan'");
    }
}

$obj = new Display();
$records = $obj->getRecords();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Tables Display</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="container-fluid">
    <div class="mytable">
        <h4>My Dynamic Table Display</h4>


        <?php
        if (isset($_GET['msg'])) {
        ?>
            <div class="alert alert-success"><?=$_GET['msg']??null?></div>
        <?php
        }
        ?>


        <form>
            <table class="table table-bordered">
                <tr>
                    <td>&nbsp;</td>
                    <td>ID</td>
                    <td>City</td>
                    <td>Country</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach ($records as $record) {
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $record['id'] ?></td>
                        <td><?= $record['name'] ?></td>
                        <td><?= $record['country'] ?></td>
                        <td>
                            <a title="Click to edit this record"
                               href="/manchester/october/dynamictable/process.php?action=edit&id=<?= $record['id'] ?>"
                               class="btn btn-primary">Edit</a>
                            <a title="Click to delete this record"
                               href="/manchester/october/dynamictable/process.php?action=delete&id=<?= $record['id'] ?>"
                               class="btndelete btn btn-danger" data-id="<?= $record['id']?>">Delete</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </form>
    </div>
</div>
<style>
    .mytable tr:first-child {
        background-color: #46060c;
        color: #ffe748;
    }

    .mytable tr:first-child td {
        font-weight: bolder;
    }
</style>
<script>

    $(function () {

        $(".btndelete").click(function () {
           var id = $(this).data('id');
           var ask = confirm("Are you sure you want to delete this record?");
           if (ask){
               document.location = "/manchester/october/dynamictable/process.php?action=delete&id="+id;
           }
           return false;
        });



    });

</script>
</body>
</html>
