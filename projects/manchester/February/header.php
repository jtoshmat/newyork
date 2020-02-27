<?php
switch ($page){
    case 'monday':
        $title = "Welcome to Monday!";
        $color = 'f00';
        $monday = "<i class='fas fa-arrow-circle-right'></i>";
        $tuesday = null;
        $wednesday = null;
        $myday = null;
        break;
    case 'tuesday':
        $title = "Welcome to Tuesday!";
        $color = '555';
        $tuesday = "<i class='fas fa-arrow-circle-right'></i>";
        $monday = null;
        $wednesday = null;
        $myday = null;
        break;
    case 'wednesday':
        $title = "Welcome to Wednesday!";
        $color = 'fff';
        $wednesday = "<i class='fas fa-arrow-circle-right'></i>";
        $monday = null;
        $tuesday = null;
        $myday = null;
        break;
    default:
        $title = 'My Day is OFF Day';
        $color = '000';
        $myday = "<i class='fas fa-arrow-circle-right'></i>";
        $monday = null;
        $tuesday = null;
        $wednesday = null;
        break;
}
?>

<div class="header">
    <img class="logo" src="https://lh3.googleusercontent.com/proxy/PcmPrgcTRacBqUUMts0eELZGZp4AXqE4Yz0X7pGEAhnJpPzQ8OwbYGyf24vSrbR7MuojScyhSx2WdLD6qciaqKbZ5ShVf7aOwuM9dIPjm3yGuM_Vrzr561mzFSM">
    <h3 class="title"><?=$title?></h3>
</div>
<div class="mymenu">
    <?=$monday?> <a href="monday24.php">Monday 24</a>
    <?=$tuesday?> <a href="tuesday25.php">Tuesday 25</a>
    <?=$wednesday?> <a href="wednesday26.php">Wednesday 26</a>
    <?=$myday?> <a href="myday.php">My Day</a>
</div>
<style>
    .header{
        height: 100px;
        background-color: #<?=$color?>;
    }

    .fas{
        color: #ffd248;
        font-size: 120%;
    }
</style>