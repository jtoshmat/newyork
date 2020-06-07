<?php
//Step 1: Validate your Method.
$method = $_SERVER['REQUEST_METHOD'];
if (!$method=='POST'){
    logBadRequests("BAD GUY with A BAD METHOD ".__LINE__);
    exit("BAD GUY with A BAD METHOD");
}
//Step 2: Validate your IP Address
$ipaddress = $_SERVER['REMOTE_ADDR'];
if (!$ipaddress == $_POST['ip']){
    logBadRequests("IPs do not match");
    exit("IP addresses do not match");
}


//Step 3: Validate http referer
$ref = $_SERVER['HTTP_REFERER'];
$is_ref_valid = ($ref == 'http://newyork.local/projects/ibm/php/jon.php')??false;

if(!$is_ref_valid){
    logBadRequests("BAD GUY and GTFO: ".__LINE__);
    exit("BAD GUY and GTFO");
}

//Step 4: input validation.
$email = $_POST['username']??null;
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    var_dump($email);
    exit;
}
echo "Bad Email";
exit;


<<<<<<< HEAD
    th {
        background-color: dodgerblue;
        color: #4b0019;
        font-weight: bolder;
    }
</style>
=======
echo "WOHOOOOOO, ALL VALIDATIONS ARE GOOD";
>>>>>>> ae85e4c8ceb75bfb8d51839d7645703650d7b855

function logBadRequests($msg=''){
    $data = [
            'IP' => $_SERVER['REMOTE_ADDR'],
            'REF' => $_SERVER['HTTP_REFERER'],
            'PORT' => $_SERVER['REMOTE_PORT'],
            'TIMESTAMP' => date('Y-m-d h:i:s A'),
            'MESSAGE' => $msg
    ];

    $detail = implode('; ', $data);

    $input = "  |  Log: ".print_r($detail, true).'  | ';
    file_put_contents('/Applications/XAMPP/xamppfiles/htdocs/newyork/projects/ibm/logs/access.log', $data);
}
