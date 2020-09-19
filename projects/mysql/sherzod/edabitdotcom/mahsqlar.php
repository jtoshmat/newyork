<?php

function collatz($num) {
    $n=0;
	while($num<=1){
        if ($num%2==0){
            $num=$num/2;
        }
        elseif ($num%2!=0){
            $num=$num*3+1;
        }
        $n=$n+1;

    }  return $n;
}

print_r(collatz(8));
