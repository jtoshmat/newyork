<?php
$covid = $_GET['covid']??'Uzbekisitan';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?format=json&name=$covid",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: covid-19-data.p.rapidapi.com",
        "x-rapidapi-key: d70673d126mshf2d2056e7ac839bp1e5e1fjsnc55ca3bddde0"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response);
    var_dump($response);
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
<h2 style="text-align: center">Search Covid-19 information here</h2>
    <table class="table table-danger">
        <tr><td>country</td><td><?php print_r($response[0]->country)?></td></tr>
        <tr><td>code</td><td><?php print_r($response[0]->code)?></td></tr>
        <tr><td>confirmed</td><td><?php print_r($response[0]->confirmed)?></td></tr>
        <tr><td>recovered</td><td><?php print_r($response[0]->recovered)?></td></tr>
        <tr><td>critical</td><td><?php print_r($response[0]->critical)?></td></tr>
        <tr><td>deaths</td><td><?php print_r($response[0]->deaths)?></td></tr>



    </table>
</div>
</body>
</html>
