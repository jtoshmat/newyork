<!doctype html>

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