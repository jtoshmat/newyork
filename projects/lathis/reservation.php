<?php
namespace Flights;
class  Reservation
{
    public function __construct()
    {
        echo "<hr>Welcome, and nice to meet you! <hr>";
    }


    public function search()
    {
        return "This is a search method";
    }

    public function book()
    {
        return "This is a booking method";
    }

    public function cancel()
    {
        return "This is a cancel method";
    }

    public function __destruct()
    {
        echo "<hr>It was nice to meet you and good bye<hr> ";
    }
}
$reservation = new Reservation();
echo $reservation->search();


