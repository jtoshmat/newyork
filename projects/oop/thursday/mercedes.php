<?php
<<<<<<< HEAD
namespace Vehicle;
include_once 'car.php';
class Mercedes extends  Car
{
    public  function autoPark(){
        return"Mercedes can auto park itself";
    }
    public function drive()
    {
        $mytext = "Parent: ". parent::drive();
        $mytext .= "<br>Mercedes: This is the childs method and overwriting it.";
        return $mytext;
    }
}
$mercedes = new Mercedes();
$mercedes->make = 'C300';
print $mercedes->drive();
print "<hr>";
echo $mercedes->autoPark();
=======


namespace Vehicle;
include_once 'car.php';


class Mercedes extends Car
{
    public function autoPark(){
        return "Mercedes can auto park itself";
    }

    public function drive()
    {
        $mytext = "Parents: ". parent::drive();
        $mytext .= "<br>Mercedes: This is the child's method and overwriting it.";
        return $mytext;
    }


}

$mercedes = new Mercedes();

$mercedes->make = "C300";
print $mercedes->drive();
print "<hr>";

echo $mercedes->backup();

>>>>>>> d029929777a56a8edb05e324fb17b214ec0c4e1d
