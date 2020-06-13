<?php

$zipcode  = $_GET['keyword']??11375;
$zipcode = strip_tags($zipcode);
$weather = [];
if (!empty($zipcode)) {


    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://us-weather-by-zip-code.p.rapidapi.com/getweatherzipcode?zip=" . $zipcode,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: us-weather-by-zip-code.p.rapidapi.com",
            "x-rapidapi-key: a8ffce9bebmshf7ec9d45dc197fcp1ce2f9jsnd6da02ec8b57"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
        $weather = [
            'eror'=>true,
            'description'=>$err,
            'output'=>$response
        ];
    } else {
        $weather = [
            'error'=>false,
            'description'=>null,
            'output'=>$response
        ];
    }
    $weather = json_decode($weather['output']);
}
