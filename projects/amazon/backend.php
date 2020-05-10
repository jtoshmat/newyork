<?php
namespace MyAmazon;

use Database\database;

include_once "../../inc/database.php";

class WorldNews{
    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_GET;
    }

    public function getWorldNews(){
        $keyword = $this->parms['keyword']??null;
        if (strlen($keyword)>1){
            return $this->db->sql("SELECT * FROM world_news WHERE description like '%$keyword%' ");
        }
        return $this->db->sql('SELECT * FROM world_news limit 100');
    }
}
$obj = new WorldNews();
$records = $obj->getWorldNews();
?>