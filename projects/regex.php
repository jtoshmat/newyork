<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search File</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <div>
        <form method="get">
        <p>Search: <input name="keyword" type="text">
        <select name="extention">
            <option value="jpg">JPG</option>
            <option value="png">PNG</option>
            <option value="js">JS</option>
            <option value="css">CSS</option>
            <option value="php">PHP</option>
        </select>
            <button>Search</button>
        </p>
        </form>
    </div>

    <div>
        <?
        if (isset($_GET["extention"])){
            $extention = $_GET["extention"];
        }else{
            $extention = 'php';
        }


        $logs = file_get_contents("access.log");

        $found = preg_replace("#((127|192))#","<hr>$0", $logs);

        $mylogs = explode("<hr>", $found);


        $mysearch = [];
        foreach ($mylogs as $mylog){
            $js = preg_match("#\.$extention#", $mylog, $found);
            if ($js){
                echo "$mylog <br>";
                $mysearch[$extention][] = $mylog;
            }

        }
        file_put_contents("logs/$extention.log", print_r($mysearch,1));
        ?>
    </div>
</div>
</body>
</html>