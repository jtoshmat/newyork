<?php
//ARRAY_CHUNK
$tools = ['chanlock', 'hummer', 'screwdriver', 'cutter'];
$power_tools = ['grainder', 'screwgun', 'sawzal', 'chippingun'];
$construction = array_chunk($tools, 1);
echo "<pre>";
print_r($construction);//gruppaga bo'lish
echo "<pre>";
//ARRAY_MERGE
$tools = ['chanlock', 'hummer', 'screwdriver', 'cutter'];
$power_tools = ['grainder', 'screwgun', 'sawzal', 'chippingun'];
$construction = array_merge($tools, $power_tools);
echo "<pre>";
print_r($construction);//barcha variablllarni qo'shish.
//array_count_values
$array = [ "hello",  "world", "hello","world",'tools'];
print_r(array_count_values($array));//stringlarni sonini sanaydi.
//unset
$name = ['Felipe','Artur','Timur'];
unset($name[2]);
$name[2] = "Sunnat";
echo "<pre>";
print_r($name);
//Array_search.
$cars = ['charger','bmw','mercedes','mustang','ford'];
echo "<pre>";
$key = array_search('bmw',$cars);
print_r($cars[$key]);//valueni topib beradi.
//ARRAY_COLUMN
echo "<pre>";
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];
$result = array_column($records,'last_name','id');
print_r($result);
echo "<pre>";
//ARRAY_POP
$names = ['Said','Munis','Shoxrux','Abdunosir','Shamshod'];
print_r($names);
echo "<pre>";
array_pop($names);
print_r($names);//valuelarni oxirgisini o'chirib tashlaydi.
//Array_push
echo "<pre>";
$names = ['Said','Munis','Shoxrux','Abdunosir','Shamshod'];
print_r($names);
echo "<pre>";
array_push($names,'Abbos');
print_r($names);//valuelardan oxirgisini oshirib beradi.
//Array_shift
echo "<pre>";
$names = ['Said','Munis','Shoxrux','Abdunosir','Shamshod'];
print_r($names);
echo "<pre>";
array_shift($names);
print_r($names);//birinchi valueni ochirib tashlaydi
//Array_unshift
echo "<pre>";
$names = ['Said','Munis','Shoxrux','Abdunosir','Shamshod'];
print_r($names);
echo "<pre>";
array_unshift($names,'Abbos');
print_r($names);//valuelardan birinchisi oshirib beradi.
//Array_pad.
$newyork = ['Bronx','Manhattan','Queens','Staten Island','Brooklyn'];
$test = array_pad($newyork,5,'Long island city');
echo "<pre>";
print_r($test);//valuelarni oxiridan oshirish.
//rsort
$tools = ['chanlock', 'hummer', 'screwdriver', 'cutter'];
$power_tools = ['grainder', 'screwgun', 'sawzal', 'chippingun'];
$construction = array_merge($tools,$power_tools);
echo "<pre>";
rsort($construction);
print_r($construction);//rsort bu valuelarni pastdan sanash.
//ksort
$tools = ['chanlock', 'hummer', 'screwdriver', 'cutter'];
$power_tools = ['grainder', 'screwgun', 'sawzal', 'chippingun','gandbox'];
$construction = array_merge($tools,$power_tools);
echo "<pre>";
ksort($construction);
print_r($construction);//rsort bu valuelarni yuqorilardan sanash sanash.
//LIST ARRAY
echo "<pre>";
$info = ['coffee', 'brown', 'caffeine'];
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special";//list array bu valularning variablni tanlab qoyish.
