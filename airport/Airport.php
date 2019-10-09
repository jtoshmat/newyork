<?php


namespace Transportation;
use Database\database;

include_once '../inc/database.php';

class Airport{

    protected $db;

    public function __construct()
    {
       $this->db = new database();

    }

    public function getAirports(){

        $airport = $this->db->sql("select * from expedia");
        return $airport;
    }
}
$airport = new Airport();
echo "<pre>";
var_dump($airport->getAirports());
