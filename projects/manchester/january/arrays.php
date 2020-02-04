<?php
class Uzbekistan{
    public function travel($country){
        $msg = '';
        if (strpos($country, 'stan')){
            $msg .= "<span class='stan'>$country</span> <br>";
        }else{
            $msg .= $country;
        }
        $msg .= '<hr>';
        return $msg;
    }
}
$trip = new Uzbekistan();
echo $trip->travel('Uzbekistan');
echo "<hr>";
echo $trip->travel('Ukraine');
echo "<hr>";
echo $trip->travel('Russia');
echo "<hr>";
echo $trip->travel('USA');
echo "<hr>";
echo $trip->travel('Italy');
echo "<hr>";
echo $trip->travel('England');
echo "<hr>";
echo $trip->travel('Turkmenistan');
echo "<hr>";
echo $trip->travel('Parkistan');
echo "<hr>";
echo $trip->travel('Tadjikistan');
echo "<hr>";
?>
<style>
    .stan{
        background-color: darkred;
        color: #ffea38;
        padding:5px;
        margin:2px;
    }
</style>
Collapse



