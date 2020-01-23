<?php


namespace Food;


class Restaraunt
{

    public function order(){
        return "The food has been ordered";
    }

    public function prepare(){
        return "The food has been prepared";
    }

    public function cook(){
        return "The food has been cooked";
    }


    public function deliver(){
        return "The food has been delivered";
    }

}
