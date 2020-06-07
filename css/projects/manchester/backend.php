<?php
$username = $_POST['username']??null;
echo $username;
echo "jon@yahoo.com";
echo "<hr>";
$found = (strpos($username,'jon@yahoo.com') === false);

var_dump($found);


if (3 === false){
    echo "true";
}else{
    echo "false";
}


