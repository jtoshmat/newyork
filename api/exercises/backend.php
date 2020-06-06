<?php
$country = $_GET["country"]??'Uzbekistan';
$from_date = $_GET["from_date"]??date('m-d-Y');
$to_date = $_GET["to_date"]??date('m-d-Y');

if (empty($_GET["country"])){
    $country = 'Uzbekistan';
}
if (empty($_GET["from_date"])){
    $from_date = date('m-d-Y');
}

if (empty($_GET["to_date"])){
    $to_date = date('m-d-Y');
}



$covid19 = null;

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?format=json&name=$country",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: covid-19-data.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $covid19 = json_decode($response)[0];
}
