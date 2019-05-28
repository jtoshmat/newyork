<?php

$email = "jontoshmatov@hotmail.com";

$username = explode('@', $email)[0];
$domain = explode('@', $email)[1];


if ($domain == 'yahoo.com'){
    echo "I am sorry, we do not accept Gmail accounts";
    echo "<hr>";
}


echo 'Username:'. $username;
echo "<hr>";
echo 'Domain: '. $domain;