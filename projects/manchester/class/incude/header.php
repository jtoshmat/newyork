<?php

switch ($title) {
    case 'samarkand':
        $title = 'Samarkand';
        $color = 'CFFFFD';
        $footer = 'CFFFFD';
        break;
    case 'bukhara':
        $title = 'Buxoro';
        $color = 'F9D6ED';
        $footer = 'F9D6ED';
        break;
    case 'tashkent':
        $title = 'Toshkent';
        $color = 'F9AAF7';
        $footer = 'F9AAF7';
        break;
    case 'sirdaryo':
        $title = 'Sirdaryo';
        $color = 'A9BFF9';
        $footer = 'A9BFF9';
        break;
    default:
        $title = 'no way';
}
?>

<div class="header">
    <img id="logo" src="https://nichefacts.com/wp-content/uploads/2018/06/uber.png" alt="">
    <h1 id="title"><?= $title ?></h1>
    <div>
        <img class="iconka" src="https://icons.iconarchive.com/icons/papirus-team/papirus-apps/256/telegram-icon.png"
             alt="">
        <img class="iconka" src="https://cdn.iconscout.com/icon/free/png-256/instagram-216-721958.png" alt="">
        <img class="iconka" src="https://cdn.iconscout.com/icon/free/png-256/facebook-logo-2019-1597680-1350125.png"
             alt="">
    </div>

    <div class="mymenu">
        <a href="samarkand.php">Samarkand</a> |
        <a href="bukhara.php">Buxoro</a> |
        <a href="toshkent.php">Toshkent</a> |
        <a href="sirdaryo.php">Sirdaryo</a>
    </div>
</div>

<style>
    .header {
        background-color: #<?=$color?>;
        width: 100%;
        height: 100px;
    }
</style>

