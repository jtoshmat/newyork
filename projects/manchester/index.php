<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jon Toshmatov">
    <title>Document</title>
    <meta name="description" content="Sukhrob is an experienced web developer">
    <meta name="keywords" content="php developer, uzbek developer, zend certified enginner">
    <meta name="author" content="Sukhrob Shadiyarov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container-fluid mycontainer">

    <?php
        $error = false;
        $parms = $_GET;
        $phone = null;
        if (isset($parms['phone'])){
            $phone = $parms['phone'];
        }

        //(347)-576-4951
        $jon = preg_match("#\([0-9]{3}\)-[0-9]{3}-[0-9]{4}$#", $phone, $match);

        if (!$jon){
            $error = "Your phone format is invalid";
        }

    ?>

<h3>Phone Number Submission Form</h3>

    <?php
    if ($error) {
        ?>
        <div class="alert alert-danger">
            <?=$error?>
        </div>
        <?php
    }
    ?>


    <form method="get">
        <p>Phone:<input value="<?=$phone?>" name="phone" placeholder="(347)-576-4951" type="text"></p>
        <p><button>Submit</button></p>
    </form>

    <div>
        <?=$phone?>
    </div>

</div>

</body>
</html>