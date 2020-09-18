<?php

$email = "zukhra@gmail.com";

$useremail = explode('@', $email);

if ($useremail[1] !='gmail.com'){
    echo "We only open gmail accounts";
}else{
    echo "You are all set";
}