<?php
require '/inc/database.php';

class test{

    public $db;
    public $serializeDB;
    public function __construct()
    {
        $this->db = new database();
        $this->serializeDB = serialize($this->db);

    }

}

$obj = new test();


echo $obj->serializeDB;