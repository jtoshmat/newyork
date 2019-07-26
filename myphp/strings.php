<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Strings</title>
</head>
<body>

<?php


    //foreach, for, while, do while



    $cars = ['bmw','audi','mercedes','mazda','acura'];



    $x = 0;

    do {
        echo "The number is: $cars[$x]<br>";
        $x++;
    } while ($x > 100);





/*    $i=0;
    $y = 1;
    while($i<5){

        echo $y.': '.$cars[$i]."<hr>";

        $y++;
        $i++;

    }*/




/*
    for ($i=0; $i<count($cars); $i++){


        echo $i.': '.$cars[$i]."<hr>";



    }*/



    echo "<hr>";
    echo "<hr>";
    echo "<hr>";



    foreach ($cars as $i=>$car){
$i++;


        echo $i.": ".$car."<hr>";


    }














/*    $str = "A 'quote' is <b>bold</b>";

    // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str);*/



/*
   $states = ['Iowa','Florida','New York','Alaska','Minnessota','Utah'];


 $jon = implode("<br>", $states);

 echo $jon;*/



/*

    $text = "umi1234toshmatov@yahoo.com";

    $found = preg_match('/[a-z]{3}[0-9]{4}[a-z]{5}/',$text,$matched);


    var_dump($matched);
*/





//
//    $text = "(347)###-1999";
//
//    $pos = strpos($text, '#');
//    $total = strlen($text);
//
//    $domain = substr($text,0, $pos);
//
//
//
//
//    echo $domain;










/*    $domain = explode('@', $text);

    echo $domain[0];*/




/*    $text = "abc@abc";


    $found = strpos($text,'@');

echo $found;*/




/*$text = "Jon Toshmatov";

$result = str_split($text,3);

echo "<pre>";
var_dump($result);*/




    //$text = "Jon <span class='php'>PHP</span> Toshmatov";
    //echo str_repeat($text,1000);
    //echo $text;

    //echo strip_tags($text);


/*$text = "Jon Toshmatov";

echo str_shuffle($text);*/




/*    $text = "<<<<< Jon  Toshmatov >>>>>>";

    echo trim($text,'Jon');*/



/*
$name = "MasteR Degree";
$name2 = "mAstER DegrEe";

$name = strtolower($name);
$name2 = strtolower($name2);

$name = ucfirst($name);
$name2 = ucfirst($name2);



echo $name .' = '. $name2;*/

?>

<style>
    .php{
        background-color: #effac3;
        color: #ff0000;

        border: 1px dotted #3a90ea;

        padding:2px;
    }
</style>

</body>
</html>