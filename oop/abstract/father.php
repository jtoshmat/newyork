<?php


namespace family2;
use usa\usa;

abstract class father implements usa
{

    public function feedTheKids(){
        return "it is time to feed the kids";
    }

    public function protectTheKids(){
        return "Protect the kids in any situations";
    }

    public function playWithKids(){
        return "Spend time and play with your kids";
    }

}