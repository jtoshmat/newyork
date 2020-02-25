<?php
switch ($page) {
    case 'uzbek':
        $title = "Uzbek kinolar olami";
        break;
    case 'turkish':
        $title = "Türk filmler";
        break;
    case 'russian':
        $title = "Русские фильмы";
        break;
    case 'american':
        $title = "American movies";
        break;
    default:
        $title = 'O t h e r    m o v i e s';
        break;
}
?>
<div class="header">
    <img class="logo" src="img/logo_net.png">
    <h3 class="title"><?= $title ?></h3>
</div>
<div class="menu">
    <a href="uzbek.php">Uzbek</a>
    <a href="turkish.php">Turkish</a>
    <a href="russian.php">Russian</a>
    <a href="american.php">American</a>
    <a href="other.php">Other</a>
</div>

