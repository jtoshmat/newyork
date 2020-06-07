<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<table class="table table-bordered">
<?php
$total = 0;
$seventh = null;
$even = null;
$odd = null;
$nineteen = null;
$twentyone = null;
for($i=0; $i<10; $i++){
    echo "<tr>";
    for($y=0; $y<10; $y++){
        $total++;
        if($total%7==0){
            $seventh = 'seventh';
        }elseif($total%19==0){
            $nineteen = 'nineteen';
        }elseif ($total%21!==0){
        }
        else{
            $seventh = null;
        }
        echo "<td class='$seventh $nineteen $twentyone '>$total</td>";
    }
    echo "</tr>";
}

?>
</table>
<style>
    .seventh{
        background-color: green;
        color: white;
    }
    .nineteen{
        background-color: blue;
        color: white;
    }
    .twentyone{
        background-color: red;
        color: white;
    }


</style>

</body>
</html>




