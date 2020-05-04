<?php
class forToString{
    public $model;
    public $color;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function __toString()
    {
        return "Sorry,  you are not allowed to call the object by itself";
    }

    public function __invoke()
    {
        return "Sorry,  you are not  call the object the function";
    }
}

$result = new forToString('Iphone 11 pro Max','black');
echo $result;
echo "<hr>";
echo $result();
