<?php

echo "#1 List array";
$cars = ['Toyota', 'Infinity', 'Hyundai', 'Chevrolet'];
list($mine,$his,$her,$friend) = $cars;
echo "<pre>";
echo "My car is $mine. My son's car is $his. My wif's car $her and my friend drives $friend.";
echo "<hr>";

echo "#2 Array larni qo'shish";
echo "<pre>";
$names1 = ['Jon aka', 'Umidaxon'];
$names2 = ['Sukhrob', 'Sunnat'];
$names3 = ['Sveta', 'Sherzod','Zoda', 'Ramizbek', 'Nuriya',"Go'zal"];
$names4 = ['Fotima','Zukhra','Otajon', "Og'abek", 'Doston','Salohiddin','Muhammadjon'];
$jon = $result = array_merge($names1,$names2,$names3,$names4);
print_r($result);
echo "<hr>";

echo "#3  rsort, krsort, ksort - Array elementlarini qayta tartiblash";
echo "<pre>";
rsort($jon);//??????? Yangi array qanday yaratiladi?

print_r($jon);
echo "<hr>";

echo "<br>";
print_r($result);
echo "<echo>";

echo "#4 array_rand - Arraydan tasodifiy elementni tanlab olish";
echo "<pre>";
$tas_tan = array_rand($result);
echo $tas_tan;
echo "<br>";
echo $result[$tas_tan];
echo "<hr>";

echo "#5  array_pad - Arrayni to'ldirish";
echo "<pre>";
$colors = ['red','orange', 'yellow', 'green','blue','violet'];
$more_colors = array_pad($colors,'12','***');
print_r($colors);
print_r($more_colors);
echo "<hr>";

echo "#6 array_shift - birinchi elementni olib tashlaydi";
echo "<pre>";
array_shift($colors);
print_r($colors);
echo "<hr>";

echo "#7 array_unshift - birinchi element o'rniga boshqa element qo'shiladi";
echo "<pre>";
array_unshift($colors,'purple');
print_r($colors);
echo "<hr>";

echo "#8 array_push - arrayning oxiriga yangi element qo'shadi";
echo "<pre>";
$colors = ['red','orange', 'yellow', 'green','blue','violet'];
array_push($colors,'purple');
print_r($colors);
echo "<hr>";

echo "#9 array_pop - arrayning oxirgi elementini olib tashlaydi";
echo "<pre>";
$colors = ['red','orange', 'yellow', 'green','blue','violet'];
array_pop($colors);
print_r($colors);
echo "<hr>";

echo "#9 array_column - kategoriyalar bo'yicha ajratadi";
echo "<pre>";
$countries =[
    'Uzbekistan'=>[
        'capital'=>'Tashkent',
        'language'=>'Uzbek',
        'religion'=>'Muslim'
    ],
    'Kazakhstan'=>[
        'capital'=>'Nursulton',
        'language'=>'Kazakh',
        'religion'=>'Muslim'
    ],
    'Turkmenistan'=>[
        'capital'=>'Ashgabat',
        'language'=>'Turkmen',
        'religion'=>'Muslim'
    ],
    'Italy'=>[
        'capital'=>'Rome',
        'language'=>'Italian',
        'religion'=>'Katholic'
    ],
    'Japan'=>[
        'capital'=>'Tokyo',
        'language'=>'Japanese',
        'religion'=>'Buddhism'
    ]
];
$lang = array_column($countries,'language');
$cap = array_column($countries,'capital');
$rel = array_column($countries,'religion');
print_r($lang);
print_r($cap);
print_r($rel);
echo "<hr>";

echo "#10 array_search - arrayda izlanayotgan element o'rnini topadi";
echo "<pre>";
$cars = ['Camry', 'Corolla','Sienna','Highlander','Prius', 'Avalon'];
$find = array_search('Sienna',$cars);
print_r($find); echo "<br>";
print_r($cars[$find]);
echo "<hr>";

echo "#11 unset - arrayda so'ralgan element o'chiriladi";
echo "<pre>";
$cars = ['Camry', 'Corolla','Sienna','Highlander','Prius', 'Avalon'];
unset($cars[4]);
print_r($cars);
echo "<hr>";

echo "#12 unset - arrayda so'ralgan element o'chiriladi";
echo "<pre>";
$cars = ['Camry', 'Corolla','Sienna','Highlander','Prius', 'Avalon'];
unset($cars[4]);
print_r($cars);
$cars[4]="Yo'q";// Nega o'z o'rnida emas
print_r($cars);
echo "<hr>";

echo "#13 unset - arrayda so'ralgan element o'chiriladi";
echo "<pre>";
$cars = ['Camry', 'Corolla','Sienna','Highlander','Prius', 'Avalon', 'Eshak arava'];
$chunk = array_chunk($cars,2);
print_r($chunk);
echo "<hr>";

echo "#14 array_count_values - Tushunmadim?????????????????????????????";
echo "<pre>";
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when 
an unknown printer took a galley of type and scrambled it to make a type specimen 
book. It has survived not only five centuries, but also the leap into electronic 
typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
the release of Letraset sheets containing Lorem Ipsum passages, and more recently 
with desktop publishing software like Aldus PageMaker including versions of Lorem 
Ipsum.";
$arrays = explode(' ',$text);
print_r ($arrays);
echo "<hr>";
$count = array_count_values($arrays);
print_r($count);
echo "<hr>";






















