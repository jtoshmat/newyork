<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/bootstrap.js"></script>
</head>
<body>

<?php
    include_once 'inc/header.php';
?>

<h1>Blank Page</h1>

<p>
    Team, <br>

    Please use this blank page as your new starting page.


</p>



<?php
    $name = 'farhod';
    $title = 'sr';


    if ($name=='Jon'){
        echo "Hey Jon, it is nice meet you!";
    }
    elseif($name=='farhod' && $title=='jr'){
            echo "Hey there Farhod Jr!";
    }
    elseif($name=='farhod' && $title=='sr'){
        echo "Hey there Farhod Sr!";
    }
    else{
        echo "I do not know who you are";
    }
?>

</body>
</html>