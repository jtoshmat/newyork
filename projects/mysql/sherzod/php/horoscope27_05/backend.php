<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://solswtestapi.p.rapidapi.com/subtract",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{  \"minuend\": 8,  \"subtrahend\": 10}",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "content-type: application/json",
        "x-rapidapi-host: solswtestapi.p.rapidapi.com",
        "x-rapidapi-key: 6ced4cd34dmsh6dcd81cab6a54f3p16f5a9jsn6dcff53e2541"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
/* $curl = curl_init();

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
        "x-rapidapi-key: 6ced4cd34dmsh6dcd81cab6a54f3p16f5a9jsn6dcff53e2541"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}*/




