<?php
$age = $_POST['age'] ?? null;
$a = date('Y');
$yob = $a - $age;
header("location: may20_1.php?msg=" . "Sizning tug'ilgan yilingiz: ".$yob);
exit;