<?php
$phone_numbers1 = ["224-839-7391", "224-638-0134", "847-652-2936"];
$phone_numbers2 = ["847-728-8371", "224-028-1937", "hvcycgvhgcyc"];
$phone_numbers = array_merge($phone_numbers1, $phone_numbers2);
foreach ($phone_numbers as $phone_number=>$thing) {

    $matching = preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $thing, $match);
    echo $thing.": ";
    echo $matching;
    echo "<hr>";
}

?>
