<?php
    $parms = $_POST;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <p class="mylogo">
        <img src="http://www.my-it-education.us/img/sales/my-it-education-logo.png">
    </p>

    <h3>Bizblan aloqaga chiqganisga raxmat</h3>
    <hr>


    <?php
        if ($parms['department'] != 'management') { ?>
            <p>Dear <?= $parms['full_name'] ?></p>
            <p>Thank you for contacting us, our representative will get in touch with you soon.</p>
            <p>In the meantime, if you have any questions, please feel free to give us a call at</p>
            <p>800-BLAH-BLAH</p>
            <p>You have provided the following information:</p>
            <p>

            </p>
            <?php
        } else {
            ?>

            <p>
                Well, Hello there <br>
                I see you have a complaint for management <br>
                Sorry, I am not gonna be able to deliver your negative message to a manager
            </p>


            <?php
        }
    ?>

    <style>
        body {
            background-color: #3c5193;
            color: #e6ca12;
        }

        .mylogo {
            text-align: center;
            width: 100%;
            background-color: #fff;
            border-bottom: 3px dotted #3a90ea;
        }
    </style>

</div>
</body>
</html>
