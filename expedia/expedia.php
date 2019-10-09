<?php

namespace vacation;
use Database\database;

include_once '../inc/database.php';

class Travel{

    protected $db;

    public function __construct()
    {
        $this->db = new database();
    }


    public function getTravalerplace(){
        $umi = $this->db->sql("select * from expedia");
        return $umi;
    }
}
echo "<pre>";
$umi = new Travel();
var_dump($umi->getTravalerplace());