<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operational Priorities</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>


<table class="table table-bordered">

    <tr>
        <td></td>
        <td>2013</td>
        <td>2014</td>
        <td>2015</td>
        <td>2016</td>
        <td>2017</td>
        <td>2018</td>
        <td>Change 2017-18</td>
    </tr>


    <?php
        $titles = ['Improving business processes','Delivering','Increasing','Saving'];
        $results = [50,40,30,90];

        foreach ($titles as $num=>$title) {

            ?>

            <tr class="mytr">
                <td><?=$title?></td>
                <td><?=$results[0]?>%</td>
                <td><?=$results[1]?>%</td>
                <td><?=$results[2]?>%</td>
                <td><?=$results[3]?>%</td>
                <td>59%</td>
                <td>60%</td>
                <td><?=rand(1,100)?>%</td>
            </tr>

            <?php
        }
    ?>

</table>


<style>

    td{
        padding:5px;
        margin:2px;
    }

    .mytr td{
        background-color: #37e65c;
        border:1px dotted #e60024;
    }


    .mypink td{
        background-color: pink;
    }

    .myyellow td{
        background-color: yellow;
    }

</style>

</body>
</html>