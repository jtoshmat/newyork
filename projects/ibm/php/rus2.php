<?php
// Make number array
$howMany = 2 ;

for ($i = 1; $i <= $howMany; $i++) {
    $numbers[] = rand(10,100);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Number Maker</title>
    <style>
        .numbers span {
            display: inline-block;
            width: 3em;
            padding: 0.9em 0;
            margin: 0.5em;
            text-align: center;
            background: yellow;
            border-radius: 50%;
        }
    </style>
</head>
<body>
<p class="numbers">
    <?php foreach($numbers as $num) : ?>
        <span><?php echo $num ?></span>
    <?php endforeach ?>
</p>
<button>Refresh</button>
</body>
</html>