<?php
// ASS #2
/*$numbers = range(99, 181);
$four =[]; $nineteen = [];
foreach($numbers as $number) {
    if ($number % 19 == 0) {
        $nineteen[] = $number;
    } elseif ($number % 4 !== 0) {
        $four[] = $number;
    }
}
// ASS #2
    echo "<pre>";
    print_r($nineteen);
    echo '<hr>';
    print_r($four);

    function price(float $x){
        return $x*1.17;
    }
    echo"<hr>";
    echo price(90);*/



// ASS #3
    function RemainingDistance(float $s1, float $s){
    return 100*($s-$s1)/$s;
}
    echo "<hr>";
    echo RemainingDistance(70,1000);

// ASS #4
    function TripTime(float $v, float $s){
    return $s/$v/24/30;
}
    echo "<hr>";
    echo TripTime(19000,110000000);

   /* echo "<hr>";
    $countries = [
        'Costa Rica',
        99=>'Mexico',
        'Thailand',
        'USA'=>[
            'language'=>'English',
            'capital'=>'Washington,DC'
        ],
        'Uzbekistan'=>[
            'language'=>'Uzbek',
            'capital'=>'Tashkent'
        ],
        'Brazil'=>[
            'language'=>'Portugese',
            'capital'=>'Brazilia'
        ],
        'England'=>[
            'language'=>'English',
            'capital'=>'London'
        ]
    ];
    echo "<pre>";
    krsort($countries);
    print_r($countries);*/
 echo "<hr>";
  $t = round(5.5);
   echo $t;


































