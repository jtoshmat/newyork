<?php
$filename = "access.log";

$output = file_get_contents($filename);

 echo "<pre>";
echo $output;
