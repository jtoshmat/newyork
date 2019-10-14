<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Cars</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php
include_once 'car.php';
$vehicle = new \Vehicle\Car();
$cars = $vehicle->getCars();
//echo "<pre>";
//var_dump($cars[1]);
//exit;
?>

<div class="container">
    <div class="mycars">
        <h4>Welcome to Car Collections</h4>
        <form>
<<<<<<< HEAD
            <p>Search your car: <input value="<?=$_GET['keyword']??NULL?>" name="keyword" ><button>Search</button></p>
=======
            <p>Search your car: <input value="<?=$_GET['keyword']??NULL?>" name="keyword"><button>Search</button></p>
>>>>>>> eaca0238c35807eeaef00a2195efee1e66ae2c12
        </form>

        <table class="table">

            <tr>
                <td>Name</td>
                <td>Models</td>
            </tr>

            <?php
                foreach ($cars as $num=>$car) {
                    ?>
                    <tr>
                        <td><?=$car['cars']['code']?></td>
                        <td>
                            <div class="models">
                               <ul>
                                   <?php
                                            foreach ($car['mymodels'] as $model) {
                                                echo "<li>" . $model['title'] . ",  " . $model['code'] . "</li>";
                                            }
                                   ?>
                               </ul>
                            </div>

                        </td>
                    </tr>
                    <?php
                }
            ?>

        </table>

    </div>
</div>

<style>

    tr:first-child td{
        background-color: #ff1d30;
        color: #ffda55;
        font-size: 14px;
    }

    td{
        border:1px solid black;
    }

    td:first-child{
        font-size: 30px;
        color: #184cd8;
        font-family: "American Typewriter";
    }

    .models{
        width:90%;
        height:200px;
        overflow: auto;
        background-color: #f3eaff;
        border:1px solid #ffb9c7;
        margin: auto;
    }

    .mycars{
        margin: auto;
        text-align: center;
    }

    input{
        width:40%;
        background-color: #f4f4f4;
        border:1px solid black;
    }


</style>

</body>
</html>