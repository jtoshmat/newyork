<?php
$age = $_POST['age']??18;
$current_year = date('Y');
$dob = $current_year - $age;
$retire_age = 70 - $age;
$msg = "Dear user, you were born in $dob and you will retire in $retire_age years";
echo $msg;
header("Location: index.php?msg=$msg");//redirect or taking the user back to index.php
exit;


