<?php
$location = $_GET['location']??null;
function searchApi($location){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://tripadvisor1.p.rapidapi.com/locations/search?location_id=1&limit=30&sort=relevance&offset=0&lang=en_US&currency=USD&units=mi&query=$location",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: tripadvisor1.p.rapidapi.com",
            "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        return [
            'error' => 1,
            'output' => $err
        ];
    } else {
        return [
            'error' => 0,
            'output' => $response
        ];
    }
}
$results = searchApi($location);
$results = json_decode($results['output']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<h2 style="text-align: center; color: lightpink" >Welcome to <?=$location?> hotels section</h2>
<div class="container">
<table class="table table-danger">
    <tr><td>Images</td><td><img src="<?=$results->data[0]->result_object->photo->images->small->url?>"></td></tr>
<!-- <img src="<?=$results->data[0]->result_object->photo->images->thumbnail->url?>">
<img src="<?=$results->data[0]->result_object->photo->images->original->url?>">
<img src="<?=$results->data[0]->result_object->photo->images->large->url?>">
<img src="<?=$results->data[0]->result_object->photo->images->medium->url?>"> -->

    <tr><td><td>Name</td><td><h3><?=$results->data[0]->result_object->name;?></h3></td></tr>
<?

#print_r($results->data[0]->result_object);?>
</table>
</div>
<style>
    table tr:first-child{
        width: 50%;
        text-align: right;
    }
</style>
</body>
</html>