<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$phrase ="To be or not to be";//String
$age = 30;//Integer
$gpa = 3.7;//Decimal Number
$isMale = false;//Boolean
echo $phrase."<br/>";
echo strtolower($phrase)."<br>";
echo strtoupper($phrase)."<br>";
echo strtoupper("dog")."<br>";
echo strlen($phrase)."<br>";
echo $phrase[0]."<br>";
echo "Mike"[0]."<br>";
$phrase[0]="B"."<br>";
echo $phrase."<br>";
$phrase = "To be or not to be";
echo str_replace("To","Panda",$phrase)."<br>";
echo substr($phrase, 8)."<br>";
echo substr($phrase, 8,7)."<br>";
echo -40.847."<br>";
echo '4+9'."<br>";
$num = 10;
echo $num."<br>";
$num += 25;
echo $num."<br>";
$num -= 5;
echo $num."<br>";
$num /= 6;
echo $num."<br>";
echo abs(-100)."<br>";
echo pow(5,3)."<br>";
echo sqrt(169)."<br>";
echo max(2,10)."<br>";
echo min(2,10)."<br>";
echo round(3.7)."<br>";
echo ceil(3.3)."<br>";
echo floor(3.9)."<br>";

?>
<br>
<form action="tutorial.php" method="get">
    Color:<input type="text" name="color">
    Plural noun:<input type="text" name="pluralNoun">
    Celebrity:<input type="text" name="celebrity">
    <input type="submit">
    <form/>
    <br>
    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];
    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celebrity <br>";
    ?>
</body>
</html>