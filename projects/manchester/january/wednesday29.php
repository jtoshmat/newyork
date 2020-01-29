<?php
//Arrays exercises for beginners
$countries = [
        'England'=> ['Manchester_United'=> ['D.Gea','V.Lindelof','G.Maguaer','L.Shaw','A.V.Bissaka','P.Pogba','Fred','D.James','N.Matic','M.Rashford','M.Greenwood'],
        'Liverpool','Man City',],
    'Italy' => ['Inter','Milan','fav'=>'Juventus'],
    'France' => ['PSJ'],
    ['Pakhtakor'],
    'Spain' => ['Real Madrid','Barcelona'],
    'Germany' => ['Bayern Munich'],
    'first' => 'FIFA',
    'second' => 'UEFA',
    2020 => ['US' => [2015,2016,2017,2018,2019,]]];

//Question: Arraylarni valuesini $ bilan script qilish mumkinmi?
$clubs = ['Manchester','Real Madrid','Barcelona','Liverpool','Man City','Inter','Milan','Juventus',
'PSJ','Pakhtakor','Bavariya'];

unset($countries['Uzbekistan']);


$countries[0] = ['Dinami_Moskva','Zenit','Lokomotiv'];

//$countries['Uzbekistan'] = 'Russian'; //Savol: Urniga qanaqa qilib quyiladi Russia.
echo '<pre>';
//print_r($countries['England']);

//print_r($countries[2020]['US'][4]);

//echo "My favorite club is " . $countries['England']['Manchester_United'][4];


//echo $countries['England']['Manchester_United'][0].' '. $clubs[3];
print_r($countries);