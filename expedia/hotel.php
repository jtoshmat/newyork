<?php


namespace vacation;
use Database\database;

include_once "../inc/database.php";

class Hotel
{
    protected $db;
   public function  __construct()
   {
       $this->db = new database();
   }


    public function getreserve(){
        $umi = $this->db->sql("select * from groceries");
        return $umi;
    }

}
echo "<pre>";
$umi = new Hotel();
var_dump($umi->getreserve());