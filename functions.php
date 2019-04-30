<?php
echo "<h1>Welcome to Functionville!</h1>";

$emails = [
    'jon@jon.com','umida@hotmail.com',
    'foha8807@gmail.com','farhod@yandex.ru'
];


foreach ($emails as $email){
    $var = getUsername($email, true);
    echo "Username: ".$var['user']."  ";
    echo "Domain: ".$var['domain']."<hr>";
}


function getUsername($email, $domain){
    $result = explode("@", $email);

    $output = [];
    if ($domain){
        $output['domain'] = $result[1];
    }
    $output['user'] = $result[0];

    return $output;

}
