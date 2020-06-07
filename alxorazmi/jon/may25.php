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

?>

<div class="container-fluid">
<table class="table table-bordered">

    <?php
    $total = 0;
    $class = null;
    for($row=0; $row<10; $row++):?>
    <tr>
        <?php
        for($cols=0; $cols<10; $cols++):
            $total++;

            if ($total%21 == 0) {
                $class.=' twentyone';
            }elseif($total%17==0){
                $class.=' seventeen';
            }elseif($total%13==0){
                $class.=' thirteen';
            }elseif($total%7==0){
                $class.=' seven';
            }else{
                $class = null;
            }


            ?>
        <td class="<?=$class?>"><?=$total?></td>
        <?endfor;?>
    </tr>
    <?endfor;?>

</table>
</div>
<style>
    .else{
        background-color: #93fa11;
        color: white;
    }
    .thirteen{
        background-color: #814016 !important;
        color: white;
    }
    .seven{
        background-color: #000000 !important;
        color: white;
    }
    .seventeen{
        background-color: red !important;
        color: white;
    }
    .twentyone{
        background-color: #3a67ff !important;
        color: white;
    }
</style>
</body>
</html>