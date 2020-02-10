<?php

$countries = ['Uzbekistan','Russia','England','China','Morocco','Tailand','France','Nigeria','Germany',
    'Brasil','Mexico'];

foreach ($countries as $country){
    if ($country=='Uzbekistan'){
        echo "<img src='https://cdn3.iconfinder.com/data/icons/world-flags-5/512/96-Uzbekistan_Uzbek_UZB_Tashkent_Asia_asian_country_flag_-512.png'>Uzbekistan";
    }elseif ($country=='Russia'){
        echo "<img src='https://lh3.googleusercontent.com/proxy/jogi1CcKbeGaGHQxG93KELaF7A3aiIbbRK-9c7Zbm8heyhdNVvt2rpI82VkmhmmVurH1iZKw5ssAU6tq8H08ox5YyG12SaIJg2AlQ4koGMrDknEFpAvC7gT_7scLdygyGLicTg4OzPLTalI'>Russia";
    }





    else{
        echo $country. "<br>";
    }

    echo "<hr>";
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
</head>
<body>
<style>
    img{
        width: 100px;
        height: 100px;
    }



</style>
</body>
</html>

