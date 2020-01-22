<?php
namespace Flights;

class Reservation{





    public function search(){
        return "This is a search method";
    }
    public function book(){
        return "This is a book method";
    }
    protected function cancel(){
        return "This is a cancel method";
    }



}


$jon = new Reservation();

echo $jon->search();
