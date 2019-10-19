<?php
namespace Office;

class Worker{


    public function attendMeeting(){
        return "Everyone must attend the daily morning meeting";
    }

    public function answerClientsCalls(){
        return "Everyone must answer clients calls and emails";
    }

    public static function getMyPaycheck(){
        return "I am picking up";
    }

    public static function celebrateMyBirthday(){
        return "You know what, I am here to celebrate my birthday, so do not piss me off!";
    }
    

}


echo Worker::getMyPaycheck();
echo "<hr>";

echo Worker::celebrateMyBirthday();