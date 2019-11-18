<?php
namespace Vehicle;
use Database\database;

include_once '../inc/database.php';

class Car
{
    protected $db;
    protected $keyword;

    public function __construct()
    {
        $this->keyword = $_GET['keyword']??null;
        $this->db = new database();
        //we will be connecting to DB here
    }

    public function getCars(){
        $vehicles = $this->db->sql("SELECT * FROM cars WHERE title like '%".$this->keyword."%'");
        $cars = [];
        foreach ($vehicles as $num=>$vehicle){
            $cars[] = [
                'cars' => $vehicle,
                'mymodels' => $this->getMo dels($vehicle['id'])
            ];
        }
        return $cars;
        //We will be fetching all the cars here.
    }

    protected function getModels($cart_id){
        return $this->db->sql("SELECT * FROM models where car_id=".$cart_id);
    }
}