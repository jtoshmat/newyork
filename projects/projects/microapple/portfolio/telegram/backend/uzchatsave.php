<?php
namespace Portfolio;
use Database\database;

include_once "../database.php";
class UzChatSave
{
    public $parms;
    private $db;
    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();
    }

    public function fetchChats(){

        $from_userid = (int) $this->parms['from_userid'];
        $to_userid = (int) $this->parms['to_userid'];
        $msg = $this->parms['msg'];

        $sql = "INSERT INTO chats (from_userid, to_userid, message) VALUES (2,3,'$msg');";
        return $this->db->sql($sql);
    }
}



$obj = new UzChatSave;
$chats = $obj->fetchChats();
$from_userid = (int) $obj->parms['from_userid'];


print_r($obj->parms);
?>
