<?php

$first_name = $_POST['first_name']??null;

$msg = "Dear, $full_name, Thank you for doing business with us";
header("Location: mmm.php?msg=".$msg);
exit;



