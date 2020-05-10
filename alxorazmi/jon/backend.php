<?php
$parms = $_POST;

echo "First Name: ". strip_tags($parms['first_name'])??null;
echo "<br>";
echo "Message: ". $parms['your_message']??null;


?>


<hr>
Go back to <a href="may6.php">May 6</a>



