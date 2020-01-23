<?php


namespace Cuisine;


class Restaurant
{

    public function order(){
        return "Your meal has been ordered";
    }
    public function prepare(){
        return "Your meal has been prepared";
    }
    public function cook(){
        return "Your meal has been cooked";
    }
    public function deliver(){
        return "Your meal has been delivered";
    }


}
$food = new Restaurant();
echo $food->deliver();