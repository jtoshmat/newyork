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
<div class="container-fluid">
    <table class="table-bordered">
        <?php
        $nums = range(1,8);
        foreach ($nums as $num){
        echo "<tr>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";
            echo "<td>". "Chess"."</td>";


        echo "</tr>";}
        ?>

    </table>

</div>

</body>
</html>
