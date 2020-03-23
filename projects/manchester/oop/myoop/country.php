<?php
namespace markaziy_osiyo;

class markaziyOsiyo{
    public $country;
    public $capital;
    public $people;
    public $president;
    public $url;
}

$asia = new markaziyOsiyo();
$results = [
    1 => ['country'=>'Uzbekistan','capital'=>'Tashkent','people'=>'32mln','president'=>'Sh.Mirziyoyev','url'=>'http://google.com'],
    2 => ['country'=>'Tadjikistan'],
    3 => ['country'=>'Turkmenistan'],
    4 => ['country'=>'Kyrgizistan'],
    5 => ['country'=>'Afghanistan'],
];
?>

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

<div>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Country</td>
            <td>Capital</td>
            <td>People</td>
            <td>President</td>
            <td>Website</td>
        </tr>
        <?php

        foreach ($results as $num=>$result):
        $asia->country = $result['country'];

        ?>



        <tr>

            <td><?=$num?></td>
            <td><?=$asia->country?></td>

            <td>Capital</td>
            <td>People</td>
            <td>President</td>
            <td>Website</td>
        </tr>
        <?endforeach;?>
    </table>

</div>

</body>
</html>