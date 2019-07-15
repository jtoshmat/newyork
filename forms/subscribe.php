<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subscribe</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="/js/j"
</head>
<body>
<?php
    $parms = $_POST;

   if (isset($parms['email']) && !empty($parms['email'])){

        var_dump($parms);


   }


?>
<div class="container">
    <div class="myform">
        <form action="subscribe.php" method="post">
            <p><h4>Subscribe Our Newsletter</h4></p>
            <p><label>Your Email Address: </label>
                <input class="input-group"  type="email" placeholder="Your Email Address"
                       name="email">
            </p>
            <p><label>Remove: </label>
            <input type="checkbox" name="remove" value="1">
            </p>
            <p>
                <button class="btn btn-light" type="reset">Start Over</button>
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </p>
        </form>
    </div>
</div>
<script>
    $(function () {
       alert("I am a JQuery");
    });
</script>
</body>
</html>