<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<?php
$num = 0;
?>
<table class="table table-bordered">
    <?php for ($i=1; $i<9; $i++): ?>
        <tr>
            <?php for ($y=0; $y<9; $y++): $num++?>
                <td>
                    <?php
                    if ($num&3==0){
                        echo "<div class='rang'>$num</div>";
                    }else{
                        echo "<div class='dif'>$num</div>";
                    }
                    ?>
                </td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>

<style>
    .rang{
        text-align: center;
        color: #ff3622;
    }
    .dif{
        text-align: center;
        color: #16ff9a;
    }
</style>
</body>
</html>






