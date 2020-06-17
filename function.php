<?php
/*function MyFunction($a, $b){
    return $a+$b;

}
var_dump(MyFunction(201,100));*/

function OurFunction($a, $b, $c){
    if ($a>$b && $b>$c){
        print_r("$a - largest number;");
        echo "<br>";
        print_r("$b - middle number;");
        echo "<br>";
        print_r("$c - smallest number.");
        echo "<br>";
    }
    elseif ($a>$b && $b<$c && $a>$c){
        print_r("$a - largest number;");
        echo "<br>";
        print_r("$c - middle number;");
        echo "<br>";
        print_r("$b - smallest number.");
        echo "<br>";
    }
    elseif ($a>$b && $b==$c){
        print_r("a=$a - largest number;");
        echo "<br>";
        print_r("b=$b and c=$c are equal.");
        echo "<br>";
    }
    elseif ($a==$b && $b>$c){
        print_r("a=$a and b=$b are equal;");
        echo "<br>";
        print_r("$c - smallest number.");
        echo "<br>";
    }

    elseif ($a==$c && $c>$b){
        print_r("a=$a and c=$c are equal ;");
        echo "<br>";
        print_r("$b - smallest number.");
        echo "<br>";echo "<br>";

    }
    if ($b>$c && $c>$a){
        print_r("a=$b - largest number;");
        echo "<br>";
        print_r("c=$c - middle number;");
        echo "<br>";
        print_r("a=$a - smallest number.");
        echo "<br>";
    }
    elseif ($b>$c && $c<$a && $b>$a){
        print_r("b=$b - largest number;");
        echo "<br>";
        print_r("a=$a - middle number;");
        echo "<br>";
        print_r("c=$c - smallest number.");
        echo "<br>";
    }
    elseif ($b>$c && $c==$a){
        print_r("b=$b - largest number;");
        echo "<br>";
        print_r("c=$c and a=$a are equal.");
        echo "<br>";
    }

    elseif ($b==$c && $c>$a){
        print_r("b=$b and c=$c are equal;");
        echo "<br>";
        print_r(" a=$a- smallest number.");
        echo "<br>";
    }

    elseif ($c>$a && $a>$b){
        print_r("c=$c - largest number;");
        echo "<br>";
        print_r("a=$a - middle number;");
        echo "<br>";
        print_r("b=$b - smallest number.");
        echo "<br>";
    }
    elseif ($c>$a && $c>$b && $b>$a){
        print_r("c=$c - largest number;");
        echo "<br>";
        print_r("b=$b - middle number;");
        echo "<br>";
        print_r("a=$a - smallest number.");
        echo "<br>";
    }

    elseif ($c>$a && $a==$b){
        print_r("c=$c - largest number;");
        echo "<br>";
        print_r(" a=$a and b=$b are equal.");
        echo "<br>";
    }

    elseif ($a==$b && $b==$c){
        echo "All numbers are equal.";
        echo "<br>";
        print_r("a=$a, b=$b, c=$c.");
    }

}
print_r(OurFunction(100,100,100));