<?php
echo "This is For functions <br>";
echo "<hr>";
for ($sanoq=1; $sanoq<=100; $sanoq++){


        echo $sanoq . "<br>";


}
echo "<hr>";
echo "This is Foreach functions <br>";

$sanoqlar = range(1, 100);

foreach ($sanoqlar as $sanoq){
    if ($sanoq%3==0 && $sanoq%2==0){
        echo $sanoq . "<br>";
    }
}