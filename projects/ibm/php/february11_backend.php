<?php
class MyRating{
    public $parms;
    public function __construct()
    {
        $this->parms = $_POST;
    }
    public function printInputs(){
        return $this->parms;
    }
}

$obj = new MyRating();
echo "<pre>";
print_r($obj->printInputs());
