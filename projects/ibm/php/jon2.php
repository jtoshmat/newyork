<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a3684e9cb728d8456f897e7b81b65f4139672e3c
    <title>Welcome to PHP</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
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
        foreach ($numbers as $id => $number) {
            $row++;
            //2 ga bulinadigan sonlar
            if ($number % 2 == 0) {
                $class_even = "class='even'";
            } else {
                $class_even = null;
            }

            //9ga bulinadigan sonlar
            if ($number % 9 == 0) {
                $class_nine = "class='nines'";
            } else {
                $class_nine = null;
            }

            //MY AGE
            if ($number == 42) {
                $class_myage = "class='myage'";
            } else {
                $class_myage = null;
            }
            ?>
            <tr>
                <td><?= $row ?></td>
                <td><?= $number ?></td>

                <td <?= $class_even ?>>
                    <?php
                    if ($class_even) {
                        echo $number;
                    }
                    ?>
                </td>

                <td <?= $class_nine ?>>
                    <?php
                    if ($class_nine) {
                        echo $number;
                    }
                    ?>
                </td>

                <td <?= $class_myage ?>>
                    <?php
                    if ($class_myage) {
                        echo "<img src='https://www.shareicon.net/data/256x256/2016/04/04/744685_birthday_512x512.png'";
                    }
                    ?>
                </td>

            </tr>
            <?php
        }
        ?>


    </table>
<<<<<<< HEAD
=======
=======
    <title>LOGIN FORM</title>
</head>
<body>
>>>>>>> ae85e4c8ceb75bfb8d51839d7645703650d7b855
>>>>>>> a3684e9cb728d8456f897e7b81b65f4139672e3c

    <div class="container-fluid">
        <form method="post" action="backend.php">
            <p>
                <label>Username:<input value="jon2@jon2.com" type="email" name="username"
                                       placeholder="username"></label><br>
                <label>Password:<input value="sdfsdfsdfs" type="password" name="password"
                                       placeholder="password"></label><br>
                <input type="hidden" value="<?= $_SERVER['REMOTE_ADDR'] ?? false ?>" name="ip">
                <button name="submit" class="btn btn-success">Submit</button>
                <button name="reset" class="btnremove">Reset</button>
            </p>
        </form>
    </div>

</body>
<style>
    table th {
        background-color: #0b18ff;
        color: whitesmoke;
    }

    tr:nth-child(even) {
        background-color: white;
    }

    .nines {

    }
</style>
</html>