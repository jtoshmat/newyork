<?php
$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);

print_r($search_array);

echo "<hr>";

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    print_r($search_array);
}