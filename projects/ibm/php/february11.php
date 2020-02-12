<?php
$arr = [
    'ice cream ($5.99)',
    'banana ($0.20)',
    'sandwich ($8.50)',
    'Chocolate ($1.99)',
    'Subway ($3.99)',
    'Coke ($5.99)',
    'Pepsi ($22.99)',
    'Fanta ($110.99)',
];
echo "<pre>";
print_r(getPrices($arr));

function getPrices($arrs){
    $prices = [];
    foreach ($arrs as $arr) {
        $found = preg_match("#[a-zA-Z]{1,100}\s\(\\$([0-9]{1,10}\.[0-9]{1,10})#", $arr, $match);
        $prices[$match[0]] = $match[1];
    }
    return $prices;
}