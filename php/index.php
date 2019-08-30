<?php

$city = ['New York','Miami','London','Paris','Tokio','Tashkent'];


unset($city[4]);

$city[3] = 'Los Angeles';
$city[4] = 'Kiev';

$total = count($city);

array_push($city,'you are stupid');
array_push($city,'Tel Aviv');
array_push($city,'Samarqand');
array_push($city,'Kokand');
array_push($city,'Dubai');
array_push($city,'Antalia');
array_push($city,'Rome');
array_push($city,'Manchester');


echo "<pre>";

$num = array_search('Dubai', $city);
$city[$num] = 'WOHOOOO';
print_r($city);







