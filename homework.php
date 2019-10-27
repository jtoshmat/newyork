<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGEX</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php
$parms = $_POST;
$dob = null;
if (isset($parms['dob'])){
    $dob = $parms['dob'];
}
$ssn = null;
if (isset($parms['ssn'])){
    $ssn = $parms['ssn'];
}
$phone = null;
if (isset($parms['phone'])){
    $phone = $parms['phone'];
}


//07-23-1990
$found = preg_match("#[0-9]{2}-[0-9]{2}-[0-9]{4}$#", $dob, $match);
if (!$found){
    $error = "Your DOB is not in correct format";
}

//123-45-6789
$found = preg_match("#[0-9]{3}-[0-9]{2}-[0-9]{4}$#", $ssn, $match);
if (!$found){
    $error = "Your SSN is not in correct format";
}

//123-45-6789
$found = preg_match("#\([0-9]{3}\)-[0-9]{3}-[0-9a-zA-Z]{4}$#", $phone, $match);
if (!$found){
    $error = "Your Phone is not in correct format";
}
?>
<div class="container-fluid">

    <p>Contact Form</p>
    <?php
    if (isset($error)) {
        ?>
        <div class="alert alert-danger"><?=$error?></div>
        <?php
    }
    ?>

    <form method="post">
        <p>DOB: <input value="<?=$dob?>" name="dob" type="text" placeholder="<?=date('m-d-Y')?>"></p>
        <p>SSN: <input value="<?=$ssn?>" name="ssn" type="text" placeholder="123-45-6789"></p>
        <p>Phone: <input value="<?=$phone?>" name="phone" type="text" placeholder="347-576-4951"></p>
        <p><button class="btn btn-primary">Submit</button></p>

    </form>

</div>
</body>
</html>