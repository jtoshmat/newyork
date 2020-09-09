<?php

//$a = 20;
//$b = 20;
//$c = 18;

function Uchta_son($a,$b,$c)
{
//a eng katta bo'lganda:
    if ($a > $b and $b > $c) {
        print_r("a=$a - eng katta son;");
        echo "<br>";
        print_r("b=$b - oraliqdagi son;");
        echo "<br>";
        print_r("c=$c - eng kichik son.");
        echo "<br>";
    } elseif ($a > $b and $a > $c and $c > $b) {
        print_r("a - eng katta son;");
        echo "<br>";
        print_r("c - oraliqdagi son;");
        echo "<br>";
        print_r("b - eng kichik son.");
        echo "<br>";
    } elseif ($a > $b and $b == $c) {
        print_r("a - eng katta son;");
        echo "<br>";
        print_r("b  va c o'zaro teng.");
        echo "<br>";
    } elseif ($a == $c and $c > $b) {
        print_r("a va c o'zaro teng;");
        echo "<br>";
        print_r("b-eng kichik son.");
        echo "<br>";
    } elseif ($a == $b and $b > $c) {
        print_r("a va b o'zaro teng;");
        echo "<br>";
        print_r("c-eng kichik son.");
        echo "<br>";
    }

//b eng katta bo'lganda:
    if ($b > $c and $c > $a) {
        print_r("b - eng katta son;");
        echo "<br>";
        print_r("c - oraliqdagi son;");
        echo "<br>";
        print_r("a - eng kichik son.");
        echo "<br>";
    } elseif ($b > $c and $b > $a and $a > $c) {
        print_r("b - eng katta son;");
        echo "<br>";
        print_r("a - oraliqdagi son;");
        echo "<br>";
        print_r("c - eng kichik son.");
        echo "<br>";
    } elseif ($b > $c and $c == $a) {
        print_r("b - eng katta son;");
        echo "<br>";
        print_r("a va c o'zaro teng.");
        echo "<br>";
    } elseif ($b == $c and $c > $a) {
        print_r("b va c o'zaro teng;");
        echo "<br>";
        print_r("a-eng kichik son.");
        echo "<br>";
    }

//c eng katta bo'lganda:
    if ($c > $a and $a > $b) {
        print_r("c - eng katta son;");
        echo "<br>";
        print_r("a - oraliqdagi son;");
        echo "<br>";
        print_r("b - eng kichik son.");
        echo "<br>";
    } elseif ($c > $a and $c > $b and $b > $a) {
        print_r("c - eng katta son;");
        echo "<br>";
        print_r("b - oraliqdagi son;");
        echo "<br>";
        print_r("a - eng kichik son.");
        echo "<br>";
    } elseif ($c > $a and $a == $b) {
        print_r("c - eng katta son;");
        echo "<br>";
        print_r("a  va b o'zaro teng.");
        echo "<br>";

    } elseif($a == $b and $b == $c) {
        echo "Hamma sonlar o'zaro teng.";
    }
}
print_r(Uchta_son(5,5,5));
echo "<hr>";
