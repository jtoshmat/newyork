<?php
namespace Dynamictable;

use Database\database;

include_once '../../../inc/database.php';

class Process
{

    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database();
        $this->parms = $_REQUEST;
        $this->validateInputs();
    }

    private function validateInputs(){
        $action = $this->parms['action'];
        if ($action=='edit'){
            return $this->editRecord();
        }
        if ($action=='delete'){
            return $this->deleteRecord();
        }
        return false; //send the use back to whervere the hell he or she came from
    }

    public function editRecord()
    {
        echo "Edit Record";
    }
    public function deleteRecord()
    {
        $id = (int) $this->parms['id'];

        $this->db->sql("DELETE FROM dynamictables where id = ".$id);
        header("Location:/manchester/october/dynamictable?msg=Your record has been deleted successfully");
        return "Deleted Record";
    }
}

$process = new Process();