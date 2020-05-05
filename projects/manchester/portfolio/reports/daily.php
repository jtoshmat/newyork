<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
require_once '../database.php';
$db = new \Database\database('MY-IT-EDUCATION.US');
$reports = $db->sql("SELECT * FROM buhgalteriya");
?>
<div id="report">
<div id="header">
    <div class="title">SALES REPORT</div>
</div>
    <div id="report_table">
        <table class="table table-bordered">
            <tr>
                <th>Cust ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>QTY</th>
                <th>TAX</th>
                <th>Total</th>
                <th>Grand Total</th>
            </tr>

            <?php
            $itogo = 0;
            $total = 0;
            $tax = 0;
            $qty = 0;
            $price = 0;
            foreach ($reports as $report):
                $itogo += $report['grant_total'];
                $total += $report['total'];
                $tax += $report['tax'];
                $qty += $report['qty'];
                $price += $report['price'];
            ?>
            <tr>
                <td><?php echo $report['customer_id']?></td>
                <td><?php echo $report['first_name']?></td>
                <td><?php echo $report['last_name']?></td>
                <td><?php echo $report['product_name']?></td>
                <td><?php echo $report['price']?></td>
                <td><?php echo $report['qty']?></td>
                <td><?php echo $report['tax']?></td>
                <td><?php echo $report['total']?></td>
                <td><?php echo $report['grant_total']?></td>
            </tr>
            <?php
            endforeach;
            ?>

            <tr>
                <td colspan="4">&nbsp;</td>
                <td>$<?php echo $price?></td>
                <td>$<?php echo $qty?></td>
                <td>$<?php echo $tax?></td>
                <td>$<?php echo $total?></td>
                <td>$<?php echo $itogo?></td>
            </tr>

        </table>
    </div>
</div>

<style>

    tr:nth-child(even){
        background-color: #eaeaea;
    }

    tr:first-child{
        background-color: #18376a;
        color: white;
    }

    table{
        background-color: white;
    }

    #report_table{
        width: 98%;
        margin: 40px auto;
    }

    #header{
        height: 200px;
        background-color: #18376a;
        color: white;
        font-size: 200%;
        font-family: "American Typewriter";
        padding:10px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .title{
        position: relative;
        top: 70%;

    }

    #report{
        width:90%;
        height: 1000px;
        background-color: #ffffff;
        margin: 10px auto;
        border: 1px solid black;
        border-radius: 20px;
    }
    body{
        background-color: black;
    }
</style>

</body>
</html>