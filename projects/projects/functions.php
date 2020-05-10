<?php
    include_once 'inc/header.php';
?>
<?php
echo "<h1>Welcome to Functionville!</h1>";

$emails = [
    'jon@jon.com','umida@hotmail.com',
    'foha8807@gmail.com','farhod@yandex.ru'
];


foreach ($emails as $email){
    //$var = getUsername($email, true);
    //echo "Username: ".$var['user']."  ";
    //echo "Domain: ".$var['domain']."<hr>";
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


$plus = calculator(5,3,'plus');

$minus = calculator(100,1,'minus');

echo $plus;
echo "<br>";
echo $minus;


function calculator($num1, $num2, $operator){
    if ($operator=='plus'){
        return $num1 + $num2;
    }
    if ($operator=='minus'){
        return $num1 - $num2;
    }
}