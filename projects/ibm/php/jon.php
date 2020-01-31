<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to PHP</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../css/jon.css">
</head>
<body>
<?php
    $numbers = range(1, 1000);
?>
<div class="container-fluid">

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Num</th>
            <th>Even</th>
            <th>Nines</th>
            <th>My Age</th>
        </tr>

        <?php
        $row = 0;
        $class_even = null;
        $class_nine = null;
        $class_myage = null;
        foreach ($numbers as $id=>$number) {
            $row++;
            //2 ga bulinadigan sonlar
            if ($number%2==0){
                $class_even = "class='even'";
            }else{
                $class_even = null;
            }

            //9ga bulinadigan sonlar
            if ($number%9==0){
                $class_nine = "class='nines'";
            }else{
                $class_nine = null;
            }

            //9ga bulinadigan sonlar
            if ($number==42){
                $class_myage = "class='myage'";
            }else{
                $class_myage = null;
            }
            ?>
            <tr>
                <td><?=$row?></td>
                <td><?=$number?></td>

                <td <?=$class_even?>>
                    <?php
                    if ($class_even){
                        echo $number;
                    }
                    ?>
                </td>

                <td <?=$class_nine?>>
                    <?php
                    if ($class_nine){
                        echo $number;
                    }
                    ?>
                </td>

                <td <?=$class_myage?>>
                    <?php
                    if ($class_myage){
                        echo "<img src='https://www.shareicon.net/data/256x256/2016/04/04/744685_birthday_512x512.png'";
                    }
                    ?>
                </td>

            </tr>
            <?php
        }
        ?>




    </table>

</div>


</body>
</html>