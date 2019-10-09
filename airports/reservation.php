<?php
namespace Flights;
use Database\database;

class Reservation
{
    public function __construct()
    {
        echo "<hr>Welcome, and nice to meet you brother<hr>";
    }


    public function search(){
        return "This is search method";
    }

    public function book(){
        return "This is book Method";
    }

    public function cancel(){
        return "This is a cancel method";
    }

    public function __destruct()
    {
     echo "<hr>It was nice to meet you and good Bye<hr>";   // TODO: Implement __destruct() method.
    }

}

$jon = new namespace\Reservation();

echo $jon->search();

