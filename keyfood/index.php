<?php
namespace Keyfood;

use Database\database;

include_once '../inc/database.php';

class Checkout
{
    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getItems()
    {
        return $this->db->sql("SELECT * FROM groceries");
    }

}

$obj = new Checkout();
$items = $obj->getItems();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyFood Checkout Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>

<div class="row">
    <div class="dashboard">

        <?php
        foreach ($items as $id => $item) {
            ?>
            <div class="items" data-id="<?= $id ?>">

                <img src="<?= $item['image'] ?>">

                <div class="description">
                    <?= $item['product_name'] ?><br>
                    $<?= $item['price'] ?>
                    <div id="description<?= $id ?>" class="quantitybox quantitybox2">
                        <button>-</button>
                        <input class="items_input" value="1">
                        <button>+</button>
                    </div>
                </div>
        </div>
        <div class="rightpanel">
            <h4 style="text-align: center">Shopping Cart</h4>
            <p>csdcs</p>
            <div class="shopping_details">
                <table class="table table-bordered" id="displaytable">
                    <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>Qnty</td>
                        <td>Total</td>
                    </tr>

                </table>
            </div>
            <div class="shopping_totals">
                <p>Total: $<span id="checkout_total">0</span></p>
                <p>Tax: $<span id="checkout_tax">0</span></p>
                <p>Grand Total: $<span id="checkout_grand_total">0</span></p>
            </div>


            <?php
        }
        ?>

        <div class="clearfix"></div>

    </div>
    <div class="shopping-box">

    </div>
</div>

<style>
    .row:after {
  content: "";
  display: table;
  clear: both;
}
    .shopping-box {
        background-color: #847ABF;
        width: 30%;
        height: 800px;
    }

    .dashboard {
        width: 70%;
    }

    .quantitybox button {
        background-color: blue;
        border-radius: 10px;
        color: white;
    }

    .items_input {
        width: 30px;
        margin: 5px;
        text-align: center;
        font-size: 20px;
        font-weight: bolder;
        background-color: #ccc9ea;
    }

    .quantitybox {
        width: 145px;
        position: relative;
        top: 0;
        z-index: 1000;
    }

    .quantitybox2 {
        visibility: hidden;
    }

    .description {
        background-color: #3a247a;
        color: #ffeb60;

    }

    body {
        background-color: #645a92;
    }

    .items:hover {
        border: 3px dotted #3a247a;
        box-shadow: #2b2b2b 2px 2px 2px 2px;
        cursor: pointer;
        background-color: #98aeff;
    }

    .items {
        width: 150px;
        height: auto;
        border: 3px solid #5a41aa;
        box-shadow: #343434 5px 5px 5px 5px;
        margin: 50px 20px 20px 20px;
        float: left;
        background-color: white;
        text-align: center;
        border-radius: 10px;
    }

    .items_clicked {
        border: 3px dotted #ff3d4f;
        box-shadow: #ffe748 2px 2px 2px 2px;
        cursor: move;
        background-color: #072448;
    }

    .items img {
        width: 100%;
        height: 130px;
    }
</style>
<script>
    $(function () {

        var total = 0;
        var prev_id = '';
        var ctotal = 0;
        $(".items").click(function () {
            $(this).toggleClass('items_clicked');
            let id = $(this).data('id');
            $("#description" + id).toggleClass('quantitybox2');

            function addToBasket(itemId) {
                cartItems.push(item['id']);
                updateCart();
                return false;
            }
        });


            if ($("#myinput" + id).val() == 0) {
                $("#myinput" + id).val(0);
            }
            total = 0;
            prev_id = '';
        });
        $(".quantitybox").click(function () {
            var id = $(this).data('did');
            return false;
        });
        var temp_total = 0;


        var myid = '';
        var tax = '';
        var grandtotal = '';
        var jon = [];
        $(".mybtn").click(function () {
            var sign = $(this).text();
            if (sign == '-') {
                var id = $(this).data('bid1');
                total--;
                myid = id;
            } else {
                var id = $(this).data('bid2');
                total++;
                myid = id;
            }
            if (prev_id != id) {
                prev_id = id;

            }
            $("#myinput"+id).val(total);
            total[prev_id]++;

            temp_total = total;

            if (total < 0) {
                total = 0;
            }
            var price = $("#price"+id).val();
            ctotal = calculate_total(price, temp_total);
            tax = calculate_tax(ctotal);
            var gtt = eval(ctotal+"+"+tax);
            grandtotal = gtt.toFixed(2);


            $.each(jon, function( index, value ) {
                if (!isNaN(value) && value>0) {
                    //grandtotal = eval(grandtotal+"+"+value);
                    grandtotal = grandtotal +", "+value;
                    //grandtotal = grandtotal.toFixed(2);
                    var html = "<tr>" +
                        "<td>1</td>" +
                        "<td>product name</td>" +
                        "<td>56</td>" +
                        "<td>"+value+"</td>" +
                        "</tr>";
                    $("#displaytable").append(html);
                }
            });
            jon[myid] = grandtotal;



            //$("#checkout_total").text(ctotal);
            //$("#checkout_tax").text(tax);
            //$("#checkout_grand_total").text(grandtotal);
            $("#checkout_grand_total").text(grandtotal);
        });
        function calculate_total(price, total){
            var total = price * total;
            total = total.toFixed(2);
            return total;
        }
        function calculate_tax(amount) {
            var result = amount/100*8.875;
            return result.toFixed(2);
        }
        function calculate_grand_total() {
            return "dssdc";
        }
    });
</script>
</body>
</html>


lfkjwe;lfkjer;lkqej;rlkqejr