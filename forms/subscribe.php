<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
</head>
<body>
<?php
    $parms = $_POST;
    if (isset($parms['email']) && !empty($parms['email'])) {
        include_once '../inc/database.php';
        $db = new \Database\database();
        $email = $parms['email'];
        $remove = $parms['remove'] ?? 0;
        $msg = null;
        $class = "alert-success";
        $results = $db->sql("select email from users where email='$email'");

        if (count($results)) {
            if (!$remove) {
                $msg = "We are sorry, your email already exists in our database";
                $class = "alert-success";
            } else {
                $db->sql("delete from users where email='$email'");
                $msg = "Your email has been removed successfully";
                $class = "alert-success";
            }
        } else {
            if (!$remove) {
                $db->sql("insert into users (email) values('$email')");
                $msg = "Your email has been added to our database successfully";
                $class = "alert-success";
            } else {
                $msg = "Your email does not exist in our database so no need to unsubscribe";
                $class = "alert-danger";
            }
        }
    }
?>
<script>
    $(function () {
        $("#myremovecheckbox").change(function () {

            if ($(this).is(':checked')) {
                $("#mysubmit").html('Unsubscribe');
            } else {
                $("#mysubmit").html('Subscribe');
            }
        });
        $("#mystartover").click(function () {
            $("#mysubmit").html('Subscribe');
        });
    });
</script>
<div class="container">
    <div class="myform">
        <form action="subscribe.php" method="post">
            <p><h4>Subscribe Our Newsletters</h4></p>
            <div class="alert <?= $class ?>"><?= $msg ?? null ?></div>

            <p><label for="email">Your Email Address: </label>
                <input class="input-group" type="email" placeholder="Your Email Address"
                       name="email">
            </p>
            <p><label for="myremovecheckbox">Remove: </label>
                <input id="myremovecheckbox" type="checkbox" name="remove" value="1">
            </p>
            <p>
                <button id="mystartover" class="btn btn-light" type="reset">Start Over</button>
                <button id="mysubmit" class="btn btn-primary" type="submit">Subscribe</button>
            </p>
        </form>
    </div>
</div>
</body>
</html>