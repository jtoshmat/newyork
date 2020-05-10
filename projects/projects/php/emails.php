<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <title>emails Report</title>
</head>
<body>


<?php
$usernames = [];
$domains = ['yahoo.com', 'gmail.com', 'my-it-education.us', 'mail.ru', 'aol.com', 'outlook.com'];

for ($i = 0; $i < 10; $i++) {
    $rdomain = array_rand($domains);
    $username = substr(str_shuffle("abcdefghklmnoprstuvwz1234567890_"), 0, 8);
    $usernames[] = $username;
    $domains[] = $domains[$rdomain];
}

?>

<div class="container">
    <div class="mytable">
        <h3 style="text-align: center">Emails Report</h3>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Domain</td>
                <td>Email</td>
            </tr>


            <?php
            $i = 0;
            foreach ($usernames as $position => $username) {
                $i++;
                $position++;
                ?>
                <tr>
                    <td><?= $position ?></td>
                    <td><?= $username ?></td>
                    <td><?= $domains[$position] ?></td>
                    <td><?= $username ?>@<?= $domains[$position] ?></td>
                </tr>

                <?php
            }
            ?>


            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Domain</td>
                <td>Email</td>
            </tr>
        </table>


    </div>
</div>

<style>

    table {
        background-color: #dde4fa;
        box-shadow: #1593a6 5px 5px 5px 5px;
    }

    tr:first-child {
        background-color: #0f6674;
        color: white;
    }

    tr:last-child {
        background-color: #0f6674;
        color: white;
    }

    td {
        border: 1px solid #177283;
    }
</style>


</body>
</html>