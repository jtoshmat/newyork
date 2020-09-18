<?php
namespace Microapple;
require_once '../../../inc/database.php';
use Database\database;

class CommentBox{
    public $parms;
    private $db;

    public function __construct()
    {
        $this->parms = $_POST;
        $this->db = new database();

    }

    public function __destruct()
    {
        unset($this->parms);
        unset($_POST);

    }

    private function validateUserData(){
        $this->parms['your_comment'] = strip_tags($this->parms['your_comment']);
    }
    public function saveUserData(){
        if (strlen($this->parms['your_comment'])<3){
            return false;
        }
        $this->validateUserData();
        $sql = "INSERT INTO comments (comment) VALUES ('{$this->parms['your_comment']}')";
        $this->db->sql($sql);
        return true;
    }
}

$comment = new CommentBox();
if (!empty($comment->parms['your_comment'])){
    $comment->saveUserData();
    header( 'Location: http://newyork.local/projects/microapple/sunnat/databaza.php');
    exit;
}
