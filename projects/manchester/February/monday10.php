<<<<<<< HEAD
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>
<body>
<div class="myform">
    <h2>Complaints Department</h2>
    <form method="post">
        <p>
            <label>Your Full Name: </label>
            <input name="full_name" type="text" placeholder="Your Full Name">
        </p>
        <p>
            <label>Tell us what you want</label> <br>
            <textarea name="whatyouwanttext"></textarea>
        </p>
        <p>
            <button type="submit">Send Us</button>
        </p>
    </form>
</div>

<?php
date_default_timezone_set('America/New_York');
$filename = '../files/complaints';
$parms = $_POST;
if (isset($parms) && !empty($parms)){
    $data =  file_get_contents($filename);
    $data .= "\n";
    $data = "Full Name: ". $parms['full_name'];
    $data .= " | Message: ". $parms['whatyouwanttext'];
    $data .= "| ". date("Y-m-d h:i:s A");
    $data .= "\n";
    file_put_contents($filename, $data, FILE_APPEND);
}
?>
</body>
</html>
=======
>>>>>>> 63f5dd87004cf4e41bbd254286a095896e5f202c
