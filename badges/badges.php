<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>



<div class="container-fluid mycontainer">



    <?php
    $dir = "badges";

    // Open a directory, and read its contents
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                if (strpos($file,'.png')>=1) {
                    echo "<img src='badges/$file'>";
                }
            }
            closedir($dh);
        }
    }
    ?>


</div class="">
<div>

</div>


<style>
    .mycontainer{
        margin: auto;
        text-align: center;
    }

    .mycontainer img{
        width: 35%;
        height: 500px;
        margin:20px;
    }
</style>


</body>
</html>