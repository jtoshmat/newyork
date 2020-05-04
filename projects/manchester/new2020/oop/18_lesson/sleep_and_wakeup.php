<?php
class forSleepANDWakeup{
    public $phone;
    public $price;
    public $model;
    public $color;

    public function __construct($phone, $price, $model, $color)
    {
        $this->phone = $phone;
        $this->price = $price;
        $this->model = $model;
        $this->color = $color;
    }

    public function __sleep()
    {
        return ['phone','price','model','color'];
    }

    public function __wakeup()
    {
        return ['phone','price','model','color'];
    }

}

$result = new forSleepANDWakeup('iPhone','$1200K','11 pro Max','grey');
$serialized = serialize($result);
echo $serialized;
echo "<hr>";
echo "<pre>";
var_dump(unserialize($serialized));