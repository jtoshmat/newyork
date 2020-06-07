<?php

    namespace Vehicle;

class  cars
{
    public $engine="im engine 2.4";

    public function setNewEngine($engine){
            $this->engine=$engine;
    }
    public function getEngine(){
        return $this->engine;
    }
    public $color="yellow";
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        return $this->color;
    }
}
