<?php
namespace Newbies;
use Database\database;

include_once "../inc/database.php";
class Testing{

    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function updateList(){
        $lists = [3,5,7,9];
        $quantities = [5,10,3,7];

        foreach ($lists as $num => $id){
            $qty = $quantities[$num];
            $updateSql = "UPDATE groceries SET quantity = quantity - $qty WHERE id = $id";
            $updated = $this->db->sql($updateSql);
        }
    }

}

$obj = new Testing();
$obj->updateList();