<?php
function sameCase($str) {
    if(ctype_upper($str)){
        return true;
	}
    elseif(ctype_lower($str)){
        return true;
    }   return false;
}

var_dump(sameCase(acscsc));




/*function solve($eq) {
    $vec=explode(' ',$eq);
    if ($vec[1]=='+'){
        return $vec[4]-$vec[2];
    }
    else{
        return $vec[4]+$vec[2];
    }
}
//echo "<pre>";
var_dump(solve('x - 3 = 7'));*/

/* class calculator{
        public function add ($a,$b){
            return $a + $b;
        }
        public function sub ($a,$b){
            return $a - $b;
        }
        public function mul ($a,$b){
            return $a * $b;
        }
        public function div ($a,$b){
            return $a / $b;
        }
        public function rem ($a,$b){
            return $a % $b;
        }
        public function task($a,$b){
            $num1 = $this->mul($a,$b);
            $num2 = $this->div($a,$b);
            return  ($num1 + $num2)/2;
        }
    }
    $calculator = new Calculator();
    $numbers =range(11,100);
    foreach ($numbers as $row=>$number){
        $rand=rand(1,10);
        if ($number%3==0 OR $number%21==0 OR $number%42==0 OR $number%43==0){
        echo "$number + $rand = " . $calculator->add($number, $rand). "<hr>";
        echo "$number - $rand = " . $calculator->sub($number, $rand). "<hr>";
        echo "$number * $rand = " . $calculator->mul($number, $rand). "<hr>";
        echo "$number / $rand = " . $calculator->div($number, $rand). "<hr>";
        echo "$number % $rand = " . $calculator->rem($number, $rand). "<hr>";
        echo "Task " . $calculator->task($number, $rand). "<hr>";}
    }

*/
/*function collatz($num)
{
    $n = 0;
    while ($num > 1) {
        if ($num % 2 != 0) {
            $num = 3*$num +1 ;
        } else {
            $num = $num/2;
        }
        $n++;
    }
    return $n;
}
print_r(collatz(5));*/

