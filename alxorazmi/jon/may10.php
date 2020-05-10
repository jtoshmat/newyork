<?php
$countries = ['USA','Uzbekistan','Brazil','Ukraine','Italy','Mexico'];

$oprni = array_search('Italy',$countries);
unset($countries[$oprni]);
echo "<pre>";
print_r($countries);

