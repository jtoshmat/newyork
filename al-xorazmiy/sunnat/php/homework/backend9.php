<?php
$sign = $_GET['sign']??'virgo';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://horoscopeapi-horoscope-v1.p.rapidapi.com/daily?sign=$sign",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: horoscopeapi-horoscope-v1.p.rapidapi.com",
        "x-rapidapi-key: a8ffce9bebmshf7ec9d45dc197fcp1ce2f9jsnd6da02ec8b57"
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
echo "<pre>";
print_r($result);
echo "<pre>";
