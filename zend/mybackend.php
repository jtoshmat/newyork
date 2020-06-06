<?php
$sign = $_GET['sign']??'virgo';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://sameer-kumar-aztro-v1.p.rapidapi.com/?sign=$sign&day=today",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "",
    CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "x-rapidapi-host: sameer-kumar-aztro-v1.p.rapidapi.com",
        "x-rapidapi-key: 682f86f681msha0d383724fb0e02p1c6604jsn223d39fc1e1b"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $result = json_decode($response);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Today's horoscope for <?=$sign?></h2>
    <table class="table table-dark">
        <tr><td>date_range</td><td><?=$result->date_range?></td></tr>
        <tr><td>current_date</td><td><?=$result->current_date?></td></tr>
        <tr><td>description</td><td><?=$result->description?></td></tr>
        <tr><td>compatibility</td><td><?=$result->compatibility?></td></tr>
        <tr><td>mood</td><td><?=$result->mood?></td></tr>
        <tr><td>color</td><td><?=$result->color?></td></tr>
        <tr><td>lucky_number</td><td><?=$result->lucky_number?></td></tr>
        <tr><td>lucky_time</td><td><?=$result->lucky_time?></td></tr>

    </table>


</div>
</body>
</html>
