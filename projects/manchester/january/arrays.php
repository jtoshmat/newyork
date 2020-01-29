<?php
//Arrays exercises for beginners
$countries = [
    'England'=> ['Manchester United'=> ['D.Gea','V.Lindelof','G.Maguaer','L.Shaw','A.V.Bissaka','P.Pogba','Fred','D.James','N.Matic','M.Rashford','M.Greenwood'],
        'Liverpool','Man City',],
    'Italy' => ['Inter','Milan','Juventus'],
    'France' => ['PSJ'],
    'Uzbekistan' => ['Pakhtakor'],
    'Spain' => ['Real Madrid','Barcelona'],
    'Germany' => ['Bayern Munich'],
    'first' => 'FIFA',
    'second' => 'UEFA',
    2020 => ['US' => [2015,2016,2017,2018,2019,]]];

//Question: Arraylarni valuesini $ bilan script qilish mumkinmi?
//$clubs = ['Manchester','Real Madrid','Barcelona','Liverpool','Man City','Inter','Milan','Juventus',
  //  'PSJ','Pakhtakor','Bavariya'];

unset($countries ['Uzbekistan']);
$countries['Uzbekistan'] = 'Russian'; //Savol: Urniga qanaqa qilib quyiladi Russia.
echo '<pre>';
print_r($countries['England']);



//echo "My favorite club is" . ($countries ['2020']); ishlamaslik sababi