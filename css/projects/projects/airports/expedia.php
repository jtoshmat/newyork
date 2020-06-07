<?php
namespace Flights;
include_once 'search.php';
class Expedia extends Reservation {


}


$jon = new Expedia();

echo $jon->search();
