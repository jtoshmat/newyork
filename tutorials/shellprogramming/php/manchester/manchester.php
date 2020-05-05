<?php
namespace APL;

class Manchester
{
    public $number;
    public $position;
    public $nationality;
    public $fullname;
    public $url;
    public $age;
}

$team = new Manchester();
$players = [
    1 => ['nationality' => 'Spain', 'position' => 'Goalkeeper', 'fullname' => 'David De Gea', 'age' => '1990', 'url' => 'https://degea1.com/', 'image' => 'https://www.pesalmanac.com/cdn/avatar/18914939.png'],
    2 => ['nationality' => 'Sweden', 'position' => 'Defender', 'fullname' => 'Viktor Lendelof', 'age' => '1994', 'url' => 'https://www.victorlindelof.com/', 'image' => 'https://s1.fifaaddict.com/fo4/players/kglbojvlq.png?20191212'],
    3 => ['nationality' => 'England', 'position' => 'Defender', 'fullname' => 'Garry Maguire', 'age' => '1993', 'url' => 'https://garrymaguire.wixsite.com/', 'image' => 'https://1vs1-7f65.kxcdn.com/img/players/players/harry-maguire_80567_21-sp-300.png'],
    4 => ['nationality' => 'England', 'position' => 'Defender', 'fullname' => 'Brandon Williams', 'age' => '2000', 'url' => 'https://manund.com/', 'image' => 'https://img.uefa.com/imgml/TP/players/14/2020/324x324/250113092.jpg'],
    5 => ['nationality' => 'England', 'position' => 'Defender', 'fullname' => 'Van Bisakka', 'age' => '1997', 'url' => 'https://manund.com/', 'image' => 'https://manunitedcore.com/wp-content/uploads/1997/11/Aaron-Wan-Bissaka-min.png'],
    6 => ['nationality' => 'France', 'position' => 'Midfielder', 'fullname' => 'Paul Pogba', 'age' => '1993', 'url' => 'https://manund.com/', 'image' => 'https://s1.fifaaddict.com/fo4/players/dvjjpryl.png?20191212'],
    7 => ['nationality' => 'Brasil', 'position' => 'Midfielder', 'fullname' => 'Fred', 'age' => '1993', 'url' => 'https://manund.com/', 'image' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p101582.png'],
    8 => ['nationality' => 'Portugal', 'position' => 'Midfielder', 'fullname' => 'Bruno Fernandes', 'age' => '1994', 'url' => 'https://manund.com/', 'image' => 'https://futhead.cursecdn.com/static/img/18/players_worldcup/212198.png'],
    9 => ['nationality' => 'Wales', 'position' => 'Midfielder', 'fullname' => 'Daniel James', 'age' => '1997', 'url' => 'https://manund.com/', 'image' => 'https://one-versus-one.com/img/players/players/daniel-james_199567_21-ub-800.png'],
    10 => ['nationality' => 'England', 'position' => 'Forward', 'fullname' => 'Marcus Rashford', 'age' => '1997', 'url' => 'https://marcusrashfordofficial.com/', 'image' => 'https://futhead.cursecdn.com/static/img/20/players_alt/p50563325.png'],
    11 => ['nationality' => 'France', 'position' => 'Forward', 'fullname' => 'Anthony Martial', 'age' => '1995', 'url' => 'https://manund.com/', 'image' => 'https://resources.premierleague.com/premierleague/photos/players/250x250/p148225.png'],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manchester United</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h4>MANCHESTER UNITED</h4>
    </div>
    <div id="teams">
        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Image</td>
                <td>Players Name</td>
                <td>Position</td>
                <td>Nationality</td>
                <td>Age</td>
                <td>Website</td>
            </tr>
            <?php foreach ($players as $num => $player):
                $team->fullname = $player['fullname'];
                $team->number = $num;
                $team->nationality = $player['nationality'];
                $team->position = $player['position'];
                $team->age = $player['age'] ?? null;
                $team->image = $player['image'] ?? null;
                $team->url = $player['url'] ?? null;
                ?>
                <tr>
                    <td><?= $num ?></td>

                    <?php if ($team->image): ?>
                        <td>
                            <img class="players_image" src="<?= $team->image ?>">
                        </td>
                    <? else: ?>
                        <td>
                            <img class="players_image"
                                 src="https://www.pesmaster.com/pes-2020/graphics/players/player_123774346_l.png">
                        </td>
                    <? endif; ?>
                    <td><?= $team->fullname ?></td>
                    <td><?= $team->position ?></td>
                    <td><?= $team->nationality ?></td>
                    <td><?= $team->age ?></td>
                    <td>
                        <? if ($team->url):?>
                            <a target="_blank" href="<?= $team->url ?>"><?= str_replace('https://','',$team->url)?></a>
                        <? endif; ?>
                    </td>
                </tr>
            <? endforeach; ?>
        </table>
    </div>
</div>
<style>
    h4 {
        text-align: center;
    }
    body {
        background-color: #fffeee;
    }
    .players_image {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 1px solid darkcyan;
    }
    tr:first-child {
        background-color: #00507a;
        color: #ffdf3c;
        font-weight: bolder;
    }
    tr:nth-child(even) {
        background-color: #f3f3f3;
    }
    td {
        text-align: center;
    }
    .fab {
        font-size: 250%;
        color: red;
    }
</style>
</body>
</html>
