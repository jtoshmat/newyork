<?php
namespace ContentUZ;
use Database\database;
include_once "../inc/database.php";

class SaveContent{
    private $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_POST??null;
    }
    public function updateContent(){
        $id = $this->parms['page']??1;
        $value = $this->parms['logo']??null;
        $id = (int) $id;
        $sql = "UPDATE blogs SET logo ='".$value."' WHERE id=1";
        return $this->db->sql($sql);
    }
}
$obj = new SaveContent();
$content = $obj->updateContent();
header("Location: index.php?page=".$_GET['page']??1);
exit;
?>