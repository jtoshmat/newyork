<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome-free-5.10.2-web/css/all.css"/>
</head>
<body>
<table class=" table table-bordered">
    <tr>
        <td>&nbsp</td>
        <td>Num</td>
        <td>Two</td>
        <td>Nine</td>
        <td>3:2</td>
    </tr>
    <?php
    $nums = range(1,1000);
    foreach ($nums as $num){
       echo "<tr>";


       echo "<td>".$num."</td>";
       echo "<td>".$num."</td>";
        if($num%2 == 0){

            echo "<td>".$num."</td>";

        }else{

            echo "<td>"."</td>";

        }
        if($num%9 == 0){

            echo "<td>".$num."</td>";

        }else{

            echo "<td>"."</td>";

        }
        if($num%2 == 0 && $num%3 == 0){

            echo "<td>"."$num"."</td>";

        }else{

            echo "<td>"."</td>";

        }
       echo "</tr>";






    }



    ?>
</table>
</body>

</html>
