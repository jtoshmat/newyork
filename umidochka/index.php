<?php
/*$name2 = $name = "pneumonoultramicroscopicsilicovolcanoconiosis";
for($i = 0; $i<strlen($name); $i++) {

    if (($i%5)==4){
        $name[$i] = '*';
    }
    if(($i%5)==0 && $i!=0){
        $name[$i] = '#';
    }

}
echo $name2. " : ".$name;
*/

/*$texts = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';

$mytexts = explode(' ', $texts);

foreach ($mytexts as $line=>$mytext){

    if ($line%9==0 && $line=!0) {
        echo "<span>" . $mytext . "</span>";
    }else{
        echo $mytext;
    }
    echo "<hr>";
}
?>

<style>
   span{
       background-color: darkred;
       color: yellow;
       margin: 2px;
   }



</style>
*/
$texts = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
$mytexts = explode(" ", $texts);

foreach ($mytexts as $line => $mytext) {
    echo '<br>';
    echo $line . ":";
    /*$pattern = "/[0-9]{1,10}/";*/
    $pattern = "/^th/";
    $numbers = preg_match($pattern, $mytext, $isnumber);

    if ($numbers) {
        echo "<span class='numbers'>" . $mytext . "</span>";
    } else {
        if ($line % 9 == 0 && $line != 0) {
            echo "<span>" . $mytext . "</span>";
        } else {
            echo $mytext;
        }
    }
    echo "<hr>";
}
    ?>

<style>
    span{
        background-color: #c82333;
        color: #e0a800;
        padding: 2px;
        margin: 1px;
    }

    .numbers{
        background-color: #0b2e13;
        color: #f5c6cb;
        padding: 2px;
        margin: 1px;
        border-radius: 90%;
    }




</style>
