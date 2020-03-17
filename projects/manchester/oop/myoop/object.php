<?php
namespace APL;
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
?>
