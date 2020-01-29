<?php
$texts = file_get_contents('../files/mytexts.txt');
$alltexts = explode(' ', $texts);

echo "<div class='mytext'>";

$lorem = [];
foreach ($alltexts as $num=>$word){
    if ($word=='Lorem'){
        $lorem[] = $num.') '. $word . "\n";
    }

    if ($word=='Ipsum'){
        $lorem[] = $num.") Ipsum \n";
    }

    echo $word. ' ';
}
echo "</div>";
file_put_contents('../files/myoutputs.txt', $lorem);
?>
