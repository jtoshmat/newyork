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
    <div>
        <img id="top_img" src="../home_work/img/youtubelogo.png" alt="">
    </div>
<?php
$num = 0;
?>
<div class="tablichka">
    <table class="table table-bordered">
        <?php for ($i = 0; $i < 9; $i++): ?>
            <tr>
                <?php for ($y = 0; $y < 9; $y++): $num++ ?>
                    <td>
                        <?php
                        if ($num % 7 == 0) {
                            echo "<div class='bythree'>$num</div>";
                        } else {
                            echo "<div class='else'>$num</div>";
                        }
                        ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>
<img id="shadiyarov" src="../home_work/img/shadiyarovuz.png" alt="">
<style>

    #shadiyarov{
        position: relative;
        margin-top: -27%;
        width: 50%;
        left: 25%;
    }
    .else{
        text-align: center;
    }
    .bythree {
        text-align: center;
        color: #0b32ff;
        background-color: #dff9e7;
    }
    .dif {
        text-align: center;
        color: #16ff9a;
    }
    .tablichka {
        position: relative;
        width: 80%;
        height: 700px;
        margin: auto;
    }
</style>
</body>
</html>
