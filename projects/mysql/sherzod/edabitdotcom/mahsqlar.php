<?php

function equal($a, $b, $c) {
    $a=[$a,$b,$c];
    if (max(array_count_values($a))==1){
        return 0;
    }
    return (max(array_count_values($a)));
}


print_r(equal(3, 3, 3));