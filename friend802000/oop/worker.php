<?php
namespace Office;

/*about traits
include_once "traits/toolboxtrait.php";

class Worker{
    use \Toolbox;
}

$worker = new Worker();

echo $worker->pickUpMail();*/

// about static

class Worker{

    public function attendMeeting(){
        return "Evryone must attend the daily meeting";
    }

    public function answerCalls(){
        return "Evryone must answer clients calls";
    }

    public static function getMyPaycheck(){
        return "I'm picking up";
    }

    public static function celebrateMyBirthday(){
        return "you know what, I'm here to celebrate my birthday";
    }
}
$var = new Worker();
echo $var->answerCalls();
echo Worker::getMyPaycheck();
echo "<hr>";
echo Worker::celebrateMyBirthday();


