<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form GET</title>
</head>
<body>

<form method="post" action="monday10.php">
    <p>
        <label>Username: </label>
        <input required="required" type="email" name="email" value="" placeholder="Your Email Address">
    </p>
    <p>
        <label>Last Name: </label>
        <input type="password" name="password" value="" placeholder="Your Password">
    </p>


    <p>
        <button type="reset">Reset</button>
        <button type="submit">Login</button>
    </p>
</form>

<a href="monday10.php?ismi=Jon&familiyasi=toshmatov&mutahasisligi=IT">Monday</a>

</body>
</html>