<?php
switch ($page) {
case 'manchester':
$title = "Manchester United";
break;
case 'dortmund':
$title = "Borussia Dortmund";
break;
case 'inter':
$title = "Inter Milan";
break;
case 'real_madrid':
$title = "Real Madrid";
break;
default:
break;
}

?>
<div class="header">
    <img class="logo" src="https://icons.iconarchive.com/icons/3xhumed/mega-games-pack-25/256/UEFA-Champions-League-1-icon.png">
    <h3 class="title"><?= $title ?></h3>
</div>
<div class="menu">
    <a href="manchester.php">Manchester</a>
    <a href="dortmund.php">Borussia Dortmund</a>
    <a href="inter.php">Inter</a>
    <a href="real_madrid.php">Real Madrid</a>
</div>

