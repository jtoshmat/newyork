<?php

class Italy{
    public function country ($country){

        $msg = 'Welcome to ';

        if ($country == 'Italy'){
            $msg .= "<span class='italy'>Italy</span> <br>";
        }else{
            $msg .= $country;
        }
        $msg .= '<hr>';

        return $msg;
    }
}

$result = new Italy();
echo $result->country('Italy');
echo "<hr>";

echo $result->country('England');
echo "<hr>";

echo $result->country('Italy');
echo "<hr>";

echo $result->country('Italy');
echo "<hr>";

echo $result->country('Italy');
echo "<hr>";

echo $result->country('Italy');
echo "<hr>";

echo $result->country('Uzbekistan');
echo "<hr>";

?>

<style>
    .italy{
        background-color: darkred;
        color: yellow;
        padding: 5px;
        margin: 2px;
    }
</style>
