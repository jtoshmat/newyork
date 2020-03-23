<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<?php
include_once "LearningCenter.php";
$lerarning_center = new \MyItEducation\LearningCenter();
$result = $lerarning_center->aboutCourse();
if (!$result['error']) {
    echo "<div class='alert alert-danger'>" . $result['msg'] . "</div>";
} else {
    echo "<div class='alert alert-success'>" . $result['msg'] . "</div>";
}
?>
</body>
</html>



