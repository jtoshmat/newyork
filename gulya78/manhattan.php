<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manhattan Project</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<table class="table table-bordered">

    <tr>
        <td>Number</td>
        <td>City</td>
        <td>Country</td>
    </tr>


    <?php
        $cities = ['Tashkent','Samarqand','Fergana','Andizhan','Bukhara'];
        foreach($cities as $num=>$city) {
            ?>
            <tr>
                <td><?=$num?></td>
                <td><?=$city?></td>
                <td>Uz</td>
            </tr>
            <?php
        }
    ?>

</table>


<style>

    tr:first-child{
        background-color: #005cbf;
        color: #fff;
    }

</style>

</body>
</html>