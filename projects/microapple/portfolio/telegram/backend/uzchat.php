<?php
namespace Portfolio;
use Database\database;

include_once "../database.php";
class UzChat
{
    public $parms;
    private $db;
    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();
    }

    public function fetchChats(){
        $userid = (int) $this->parms['userid'];
        $sql = "SELECT * FROM chats WHERE (from_userid = $userid AND to_userid = 3) or (from_userid = 2 AND to_userid = $userid) order by id asc;";
        return $this->db->sql($sql);
    }
}
$obj = new UzChat();
$chats = $obj->fetchChats();
$userid = (int) $obj->parms['userid'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat texts</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>

<div>
    <h2>Welcome to Chat! 22222</h2>


    <?php foreach ($chats as $field=>$chat):?>
    <?php
        if ($userid==$chat['from_userid']):
    ?>

    <div class="left_user_chat chatmessages">
        <?=$chat['message']?>
    </div>

    <?else:?>

    <div class="right_user_chat chatmessages">
        <?=$chat['message']?>
    </div>

    <?php
            endif;
    ?>


    <?php
    endforeach;
    ?>

</div>

</body>
</html>

