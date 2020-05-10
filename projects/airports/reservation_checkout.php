<?php
namespace Flights;
use Database\database;
include_once '../airports/database.php';
class Reservation
{
    public $parms;
    protected $db;
    protected $id;

    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database();
        $this->id = (int) $this->parms["flight_id"];

    }

    public function getFlightDetails(){
        $results = $this->db->sql("SELECT * FROM expedia WHERE id = $this->id");
        return $results;
    }

}
$obj = new Reservation();
$flights = $obj->getFlightDetails();
echo "<pre>";
var_dump($flights);

?>