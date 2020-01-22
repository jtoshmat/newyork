<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>my php form project</title>
</head>
<body>
<h2>My php Form project</h2>
<hr>

<?php
$address = "";
$firstName = "";
$lastName = "";
$age = "";
$phone = "";
$email = "";
$company = "";
$parms = $_POST;
$error = null;

if ($parms) {
    if (!empty($parms['firstName'])) {
        $firstName = $parms['firstName'];
    }

    $lastName = $parms['lastName'];
    $age = $parms['age'];
    $phone = $parms['phone'];
    $email = $parms['email'];
    $company = $parms['company'];


    if ($age < 21) {
        $error = "You must be 21 years and older to compelete this form";

        }

    }

if ($error) {
    ?>
<div class="alert alert-danger"><?=$error?></div>
<?php
    $error = null;
}else {
    ?>
<div class="alert alert-success">Looks All Good</div>
<?php
}

?>


<form class="container" method="post">
    <p>Location:<input name="address" class="address" type="text" placeholder="Location"></p>
    <p>First name:<input name="firstName" class="first_name" type="text" placeholder="First name"></p>
    <p>Last name:<input name="lastName" class="last_name" type="text" placeholder="Last name"></p>
    <p>Age:<input name="age" class="age" type="number" placeholder="age"></p>
    <p>Phone:<input name="phone" class="phone" type="number" placeholder="phone"></p>
    <p>Email:<input name="email" class="email" type="email" placeholder="email"></p>
    <p>Company:<input name="company" class="company" type="text" placeholder="name of Company"></p>
    <p>
        <button class="mybuttons">Submit</button>
    </p>

</form>
<hr>

<div class="businesscard">
    <div class="img1">
        <img src="/img/logo11.jpg">
    </div>
    <div class="details">
        <p class="name1"><?= $firstName ?>&nbsp;<?= $lastName ?></p>
        <p>Age:&nbsp;<?= $age ?></p>
        <p>Phone:&nbsp;<?= $phone ?></p>
        <p>Email:&nbsp;<?= $email ?></p>
        <p>Company:&nbsp;<?= $company ?></p>
    </div>

</div>


<style>
    h2 {
        text-align: center;
    }

    h4 {
        text-align: center;
    }

    .container {
        width: 500px;
        height: 460px;
        background-color: #b3b7bb;
        margin-left: 30%;
        text-align: right;
        padding: 20px;
        border-radius: 25px 25px 25px;
    }

    .address {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .first_name {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .last_name {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .phone {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .email {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .age {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .company {
        border-radius: 5px 5px 5px;
        border: 1px solid black;
    }

    .mybuttons {
        width: 100px;
        margin: 20px 20px;
        border-radius: 5px 5px 5px;
        border: 1px solid black;
        background-color: #003f80;
        color: #f9f9f9;
        transform: matrix(<1>);
    }

    .businesscard {
        margin-top: 20px;
        margin-left: 30%;
        height: 300px;
        width: 500px;
        background-color: #0f6674;
        border-radius: 25px 25px 25px;
        border: 1px solid black;
        color: #e7f051;
        text-align: center;
    }

    .img1 img {
        width: 150px;
        height: 250px;
        padding: 5px;
        border-radius: 15px;
        text-align: left;
        float: left;
        margin-top: 30px;
        margin-left: 10px;
    }

    .details {
        padding-top: 60px;
        text-align: left;
        padding-left: 200px;
    }
    .name1 {
        font-size: 25px;
        font-family: "American Typewriter";
    }


</style>

</body>
</html>
