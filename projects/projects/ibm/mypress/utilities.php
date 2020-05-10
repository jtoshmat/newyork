<?php
namespace Mypress;
use Database\database;

include_once '../../../inc/database.php';
class MyPress{
    protected $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
    }

    public function fetchSiteContent(){
        $id = (int) $this->parms['id']??1;
        $sql = "SELECT * FROM blogs where id = $id";
        $content = $this->db->sql($sql);
        return $content;
    }
}

$obj = new MyPress();
$site=  $obj->fetchSiteContent();
?>