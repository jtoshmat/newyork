<?php


namespace family2;
include_once 'father2.php';
 class son
{
    public function playWithDog(){
        return "Play with your puppy";
    }

    public function goToSchool(){
        return "Do not forget to get up at 7 am M-F";
    }

    public function doHomeWork(){
        return "You must do your homework before bedtime";
    }

    public function feedTheKids()
    {
        return parent::feedTheKids(); // TODO: Change the autogenerated stub
    }

    public function playWithKids()
    {
        return parent::playWithKids(); // TODO: Change the autogenerated stub
    }

    public function protectTheKids()
    {
        return parent::protectTheKids(); // TODO: Change the autogenerated stub
    }


}


$myson = new son();

echo $myson->doHomeWork();
echo "<hr>";

echo $myson->playWithKids();