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

<div class="container-fluid"></div>
<div class="dashboard">

    <?php
    foreach ($items as $id=>$item) {
        ?>
        <div class="items" data-id="<?=$id?>">

            <img src="<?=$item['image']?>">

            <div class="description">
                <?=$item['product_name']?><br>
                $<?=$item['price']?>
                <div data-did="<?=$id?>" id="description<?=$id?>" class="quantitybox quantitybox2">
                    <button data-bid1="<?=$id?>" class="btn btn-primary mybtn">-</button>
                    <input disabled="disabled" class="items_input" value="0" id="myinput<?=$id?>">
                    <button data-bid2="<?=$id?>"  class="btn btn-primary mybtn">+</button>
                </div>
            </div>


            </div>
        </div>

        <?php
    }
    ?>

    <div class="clearfix"></div>

</div>
<style>
    .quantitybox button{
        background-color: blue;
        border-radius: 10px;
    color:white;
    }

    .items_input{
        width:30px;
        margin:5px;
    text-align: center;
    font-size: 20px;
    font-weight: bolder;
    background-color: #ccc9ea;
    }
    .quantitybox{
        width: 145px;
        position: relative;
        top:0px;
        z-index: 1000;
    }

    .quantitybox2{
        visibility: hidden;
    }

    .description{
        background-color: #3a247a;
        color: #ffeb60;

    }

    body{
        background-color: #645a92;
    }
    .items:hover{
        border:3px dotted #3a247a;
        box-shadow: #2b2b2b 2px 2px 2px 2px;
        cursor: pointer;
        background-color: #98aeff;
    }
    .items{
        width:150px;
        height:auto;
        border:3px solid #5a41aa;
        box-shadow: #343434 5px 5px 5px 5px;
        margin:50px 20px 20px 20px;
        float: left;
        background-color: white;
        text-align: center;
        border-radius: 10px;
    }
    .items_clicked{
        border:3px dotted #ff3d4f;
        box-shadow: #ffe748 2px 2px 2px 2px;
        cursor: move;
        background-color: #072448;
    }

    .items img{
        width:100%;
        height: 130px;
    }
</style>
<script>
    $(function () {
        var total = 0;
        var prev_id = '';

        $(".items").click(function () {
            $(this).toggleClass('items_clicked');
            var id = $(this).data('id');
            $("#description"+id).toggleClass('quantitybox2');
            if ( $("#myinput"+id).val()==0) {
                $("#myinput" + id).val(1);
            }
            total = 0;
            prev_id = '';
        });

        $(".quantitybox").click(function () {
          var id = $(this).data('did');
           return false;
        });


        $(".mybtn").click(function () {
           var sign = $(this).text();
           if (sign=='-'){
               var id = $(this).data('bid1');
               total--;
           }else{
               var id = $(this).data('bid2');
               total++;
           }
            if (prev_id != id){
                prev_id = id;

            }

           total[prev_id] ++;

           console.log(total);


           if (total<0){
               total = 0;
           }
           $("#myinput"+id).val(total);
        });

    });
</script>
</body>
</html>


