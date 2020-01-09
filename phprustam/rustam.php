<?php
$rustam = ["FirSt" => 1, "SecOnd" => 4, "Third" =>6];
print_r(array_change_key_case($rustam, CASE_LOWER));
echo "<hr>";
$input_array = ['a', 'b', 'c', 'd', 'e'];
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true));