<?php

$africans = ['Egypt', 'Libia', 'Tunisia', 'Morocco', 'Niger', 'Sudan', 'Somalia', 'Kongo',
    'Cameroon', 'Nigeria', 'Benin', 'Togo', 'Gana', 'Senegal'];
$asians = ['Iran', 'Japan', 'Korea', 'Uzbekistan', 'China', 'Singapor', 'Tailand', 'Filippin',
    'Kazakistan', 'Afghanistan', 'Nepal', 'Suria', 'Qatar', 'Ummon'];
$europians = ['Italy', 'England', 'Germany', 'Holland', 'France', 'Belgium',
    'Demark', 'Spain', 'Shweden', 'Poland', 'Croatia', 'Romania', 'Portugal'];


//$alls = array_merge($africans,$asians,$europians);

foreach ($africans as $african) {
    if ($african == 'Egypt') {
        echo "<img src='imgs/african/egypt.png'>";
        echo "<pre>";
    } elseif ($african == 'Libia') {
        echo "<img src='imgs/african/livia.png'>";
        echo "<pre>";
    } elseif ($african == 'Tunisia') {
        echo "<img src='imgs/african/tunis.png'>";
        echo "<pre>";
    } elseif ($african == 'Morocco') {
        echo "<img src='imgs/african/morocco.png'>";
        echo "<pre>";
    } elseif ($african == 'Niger') {
        echo "<img src='imgs/african/niger.jpeg'>";
        echo "<pre>";
    } elseif ($african == 'Sudan') {
        echo "<img src='imgs/african/sudan.png'>";
        echo "<pre>";
    } elseif ($african == 'Somalia') {
        echo "<img src='imgs/african/somalia.png'>";
        echo "<pre>";
    } elseif ($african == 'Kongo') {
        echo "<img src='imgs/african/kongo.png'>";
        echo "<pre>";
    } elseif ($african == 'Cameroon') {
        echo "<img src='imgs/african/cameroon.png'>";
        echo "<pre>";
    } elseif ($african == 'Nigeria') {
        echo "<img src='imgs/african/nigeria.png'>";
        echo "<pre>";
    } elseif ($african == 'Benin') {
        echo "<img src='imgs/african/benin.png'>";
        echo "<pre>";
    } elseif ($african == 'Togo') {
        echo "<img src='imgs/african/togo.png'>";
        echo "<pre>";
    } elseif ($african == 'Gana') {
        echo "<img src='imgs/african/gana.png'>";
        echo "<pre>";
    } elseif ($african == 'Senegal') {
        echo "<img src='imgs/african/senegal.png'>";
        echo "<pre>";
    } else {
        echo "This is not african country";
        echo "<pre>";
    }
}
echo "<pre>";

foreach ($asians as $asian){
    if ($asian == 'Iran'){
        echo "<img src='imgs/asia/iran.png'>";
        echo "<pre>";
    }
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
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>

<style>
    img{
        width: 50px;

    }
</style>

</body>
</html>







//shu erga link quyishim mumkinmi birorta saytdagi ma'lumotni.
//bir paytda $africans varables ni tanlaganimda hamma davlatlarni chiqarishim mumkinmi?
//