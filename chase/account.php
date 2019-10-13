<?php
//We will need two number and operator
//Then we will call the functions based on operator



/*echo calculate(10,5,'/') ."<hr>";
echo calculate(10,5,'*') ."<hr>";
echo calculate(10,5,'+') ."<hr>";
echo calculate(10,5,'-') ."<hr>";
echo calculate(10,5,'%')."<hr>";*/


function calculate($num1, $num2, $operator){
    return eval("return $num1 $operator $num2;");
}



$numbers = range(1, 100);
$operators = ['/','+','-','*','%'];

$row = 0;
foreach ($numbers as $num1=>$num2){
    $row++;
    $onum = array_rand($operators);
    $operator = $operators[$onum];
    $output = round(calculate($num1,$num2, $operator),2);
    $result = "<span class='nums'>$row)</span> $num1 $operator $num2 = ".$output."<hr>";
    echo $result;
}
?>

<style>
    .nums{
        background-color: #57080f;
        color: #f7c749;
        padding:3px;
        margin:3px;
        border-radius: 5px;
        box-shadow: #41060b 3px 3px 3px 3px;
    }
</style>
