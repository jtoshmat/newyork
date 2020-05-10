<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid jonbox">

    <?php
        $token = rand(10000, 1000000);
    ?>

    <h4>Contact Us</h4>

    <form method="post" action="backend.php">
        <p><label>First Name:* </label> <input required="required" name="first_name" type="text" placeholder="Enter your first name"></p>
        <p><label>Last Name: </label> <input required="required" name="last_name" type="text" placeholder="Enter your last name"></p>
        <p><label>Email Address: </label> <input required="required" name="email" type="email" placeholder="Enter your email address"></p>
        <p><label>Phone Number: </label> <input name="phone" type="tel" placeholder="Enter your phone number"></p>
        <p><label>Delivery Date: </label> <input required="required" name="delivery_date" type="datetime-local" placeholder="Enter your delivery date"></p>
        <p><label>Your Message: </label></p>
        <p><textarea name="message"></textarea></p>
        <p><input name="ip_address" value="127.0.0.1" type="hidden"></p>
        <p><input name="token" value="<?=$token?>" type="text"></p>
        <p><label>Password: </label><input required="required" name="password" type="password"></p>
        <p>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </p>
    </form>

</div>

<style>
    .jonbox{
        background-color: #6d0e10;
        color: #ffdd3c;
    }
    h4{
        color:#85de8c;
    }
</style>
</body>
</html>