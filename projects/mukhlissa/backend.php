<?php
$parms = $_POST;
echo "<pre>";
if ($parms['password']=='washington'){
    echo "Your password is good";
}else{
    echo "Your password does not match";
}
