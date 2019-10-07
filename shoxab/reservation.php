<?php


namespace Flights;


class Reservation{
    public function __construct()
{
    echo "<hr>Welcome, and nice to meeet you<hr>";
}

    public function search(){
    return "This is a search method";
    }
    public function cancel(){
        return "this is a cancel method";
    }

    public function __destruct()
    {
        echo "<hr> It was nice to meet you and good bye<hr>";
    }
}

$reservation=new Reservation();
$reservation->name="Reservation";
echo $reservation->search();


