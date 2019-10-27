<?php
$ssn = ["123-34-5678", "456-34-4356","123-345-3456","sdfsdf-4234-sdfsdf","12-3344-12234","cd23-qw222-4444"];
$ssn2 = ["323-44-5678", "432*34-4356","123-686-3456","sdfsdf111ddf-sdfsdf","12+23123-12234","123-45-6789a"];
$numbers = array_merge($ssn, $ssn2);
$y =0 ;
foreach ($numbers as $num=>$item){
    $y++;
    $found = preg_match("/^[0-9]{3}-[0-9]{2}-[0-9]{4}$/", $item, $match);
    echo "$y) ";
    echo $item.": ";
    echo $found;
    echo "<hr>";
}
?>


