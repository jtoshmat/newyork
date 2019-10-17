<<<<<<< HEAD
jhgjhg
=======
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
include_once '../inc/database.php';
$db = new \Database\database();

$parms = $_GET;
$keyword = $parms['keyword']??null;
$filter_by = $parms['filter_by']??null;
$mybutton = $parms['mybutton']??null;

if ($mybutton == 'Search' && $keyword!=''){
    $airports = $db->sql("select * from airports where ".$filter_by." like '%".$keyword."%' order by ".$filter_by." desc");
}else{
    $airports = $db->sql("select * from airports limit 100");
}


?>
<div class="container">
    <h3 style="text-align: center">The world Aiports</h3>
    <div id="airports">
        <div>
            <form>
                <p>
                    Search:
                    <input value="<?=$keyword?>" name="keyword" type="text" class="myinputs">
                    <select class="custom-select" name="filter_by">
                        <option value="country">Country</option>
                        <option value="city">City</option>
                        <option value="code">Code</option>
                    </select>
                    <input name="mybutton" class="btn btn-primary" type="submit" value="Search">
                </p>
            </form>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Address</th>
                <th>City</th>
                <th>Code</th>
                <th>Country</th>
            </tr>

            <?php
            foreach ($airports as $airport) {
                ?>
                <tr>
                    <td><?= $airport['id']; ?></td>
                    <td><?= $airport['name']; ?></td>
                    <td><?= $airport['city']; ?></td>
                    <td><?= $airport['code']; ?></td>
                    <td><?= $airport['country']; ?></td>
                </tr>

                <?php
            }
            ?>


        </table>

        <?php
            if (!count($airports)) {
                ?>
                <hr>
                <div class="alert alert-danger">
                    No airport is found by that keyword - <span class="keyword_error"><?php echo $keyword;?></span>
                </div>
                <?php
            }
        ?>

    </div>
</div>

<style>

    .keyword_error{
        background-color: #f00;
        color:white;
        padding:5px;
        margin:5px;
    }
    .myinputs{
        margin: auto;
        height: 37px;
        border-radius: 10px;
        border:1px solid #e0e0e0;
    }

    .custom-select{
        width: 20%;
        height: 37px;
    }

    #airports {
        margin: auto;
        width: 100%;
        text-align: center;
    }

    #airports table {
        width: 100%;
        margin: auto;
    }


    #airports tr:first-child {
        background-color: #6698e4;
        color: #fff;
    }

    #airports td:first-child {
        background-color: #6698e4;
        color: white;
    }

    td:hover {
        background-color: #ff8d9e;
        cursor: pointer;
    }

    tr:nth-child(odd) {
        background-color: #eefff8;
    }

    tr:nth-child(even) {
        background-color: #eeeeee;
    }

    #airports tr {
        border: 1px solid black;
    }

    #airports td, th {
        border-right: 1px solid black;
    }

</style>
</body>
</html>
>>>>>>> 3218846207945941c6bc5cdb12cf61a3c26322d6
