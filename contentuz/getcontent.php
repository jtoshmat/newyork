<?php
namespace ContentUZ;
use Database\database;
include_once "../inc/database.php";

class GetContent{
    private $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET??null;
    }
    public function fetchContent(){
        $id = $this->parms['page']??1;
        $id = (int) $id;
        $sql = "SELECT * FROM blogs WHERE id = $id";
        return $this->db->sql($sql);
    }
}
$obj = new GetContent();
$content = $obj->fetchContent();
?>