<?php
namespace APL;

class Manchester{
    public $number;
    public $position;
    public $nationality;
    public $fullname;
    public $url;
}



$team = new Manchester();
$players = [
    1 => ['nationality'=>'Italy','position'=>'Owner','fullname'=>'Christian Ronaldo','image'=>'https://futhead.cursecdn.com/static/img/fm/18/players/20801_PSM2.png'],
    2 => ['nationality'=>'Russia','position'=>'coach assistant','fullname'=>'Messi','image'=>'data:image/jpeg;base64,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'],
    3 => ['nationality'=>'Russia','position'=>'goalkeeper','fullname'=>'Pogba','image'=>'https://pbs.twimg.com/profile_images/608720892793790464/tX3W0VJn_400x400.jpg'],
    4 => ['nationality'=>'Russia','position'=>'defense','fullname'=>'Jon Toshmatov 4'],
    5 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov 5'],
    6 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov'],
    7 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Alisher Navoi'],
    8 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov'],
    9 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov'],
    10 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Amir Temur'],
    11 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov','url'=>'http://facebook.com'],
    12 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Jon Toshmatov','url'=>'http://yahoo.com'],
    13 => ['nationality'=>'Russia','position'=>'forward','fullname'=>'Miss G','url'=>'http://google.com'],
];

/*
class Manchester{
    public function Coach($name, $club){
        echo "<hr>$name is coach of $club<hr>";
    }
    public function Goalkeeper($num, $goalkeeper, $nationality){
        echo "<hr>$num:  $goalkeeper is goalkeeper. He is from $nationality.<hr>";
    }
    public function Center_Back($num, $back, $nationality){
        echo "<hr>$num:  $back is defender. He is from $nationality.<hr>";
    }
    public function Midfielder($num, $middle, $nationality){
        echo "<hr>$num:  $middle is midfielder. He is from $nationality.<hr>";
    }
    public function Forward($num, $attacker, $nationality){
        echo "<hr>$num:  $attacker is midfielder. He is from $nationality.<hr>";
    }
}
$result = new Manchester();
$result->Coach('O.G.Solskjaer','Manchester United');
$result->Goalkeeper(1,'D.Gea','Spain');
$result->Center_Back(2,'V.Lindelof','Sweden');
$result->Center_Back(3,'G.Maguire','England');
$result->Center_Back(4,'V.Bissaka','England');
$result->Center_Back(5,'B.Williams','England');
$result->Midfielder(6,'B.Fernandesh','Portugal');
$result->Midfielder(7,'Fred','Brasil');
$result->Midfielder(8,'N.Matic','Serbian');
$result->Midfielder(9,'D.James','Wales');
$result->Forward(10,'M.Rashford','England');
$result->Forward(11,'M.Greenwood','England');
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Football teams assosication</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
</head>
<body>
<h4>Football Teams Association</h4>
<div id="teams">
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Image</td>
            <td>Players Name</td>
            <td>Position</td>
            <td>Nationality</td>
            <td>Website</td>
        </tr>


        <?php foreach ($players as $num=>$player):
            $team->fullname = $player['fullname'];
            $team->number = $num;
            $team->nationality = $player['nationality'];
            $team->position = $player['position'];
            $team->image = $player['image']??null;
            $team->url = $player['url']??null;
            ?>
            <tr>
                <td><?=$num?></td>

                <?php if($team->image):?>
                <td>
                    <img class="players_image" src="<?=$team->image?>">
                </td>
                <?else:?>
                    <td>
                        <img class="players_image" src="https://www.pesmaster.com/pes-2020/graphics/players/player_123774346_l.png">
                    </td>
                <?endif;?>

                <td><?=$team->fullname?></td>
                <td><?=$team->position?></td>
                <td><?=$team->nationality?></td>
                <td>
                    <?if ($team->url):?>
                    <a target="_blank" href="<?=$team->url?>">Official Website</a>
                    <?endif;?>
                </td>
            </tr>
        <?endforeach;?>


    </table>
</div>

<style>

    .players_image{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border:1px solid darkcyan;
    }

    tr:first-child{
        background-color: #00507a;
        color: #ffdf3c;
        font-weight: bolder;
    }

    tr:nth-child(even){
        background-color: #f3f3f3;
    }

    td{
        text-align: center;
    }

    .fab{
        font-size: 250%;
        color:red;
    }
</style>

</body>
</html>
