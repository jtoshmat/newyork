<?php
namespace Groceries;
include_once "../inc/database.php";
include_once "validation.php";

use Database\database;

class Groceries extends database implements \Validation
{

    private $db;
    public $parameters;

    public function __construct()
    {
        $this->db = new database();
        $this->parameters = $_GET;
        $this->checkInputs();
    }

    public function checkInputs()
    {
        $this->parameters['keyword'] = strip_tags($this->parameters['keyword']);
    }

    public function getGroceries()
    {
        $groceries = $this->db->sql("SELECT * FROM groceries_demo WHERE {$this->parameters['selectBy']} LIKE '%{$this->parameters['keyword']}%'");
        return $groceries;
    }
}

$obj = new Groceries();
$groceries = $obj->getGroceries();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groceries</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <h4 style="text-align: center">
        Household Grocery List
    </h4>
    <div class="mysearch">
        <form style="text-align: left">
            <p>Search: <input value="<?= $obj->parameters['keyword'] ?? NULL ?>" name="keyword" type="text">
                <select name="selectBy">
                    <option value="id">ID</option>
                    <option value="product_name">Product Name</option>
                    <option value="price">Price</option>
                </select>

                <button>Go!</button>

                <button onclick="updateRecord();" style="float:right; padding: 2px 2px; margin: 0px 5px;">Delete</button>
                <button onclick="deleteRecord();" style="float:right; padding: 2px 2px; margin: 0px 5px;">Update</button>


            </p>
        </form>
    </div>

    <div class="mytable">
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Price</td>
                <td></td>
            </tr>


            <?php
            foreach ($groceries as $grocery) {
                ?>

                <tr>
                    <td><?= $grocery['id'] ?></td>
                    <td><?= $grocery['product_name'] ?></td>
                    <td><?= $grocery['price'] ?></td>
                    <td><input type="checkbox" value="checkbox" name="checkbox"></td>
                </tr>

                <?php
            }
            ?>


        </table>
    </div>

</div>





