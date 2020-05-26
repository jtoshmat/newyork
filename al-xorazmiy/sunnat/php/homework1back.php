<?php
$age = $_POST['age']??null;
$usa = $_POST['usa']??null;
$this_year = date('Y');
$dob = $this_year - $age;
$this_year = date('Y');
$usa = $this_year - $usa;
$msg = "Dear User ,You were born in $age and u were in usa $usa ago";
header("Location:homework1.php?msg=$msg");
exit;