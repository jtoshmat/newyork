<?php
namespace students;

include_once "Interface_practice.php";
class Teacher implements giveEducation{
    public function listenToTheTeacher(){
        echo "The students and supposed to listen to their teachers";
    }
    public function study(){
        echo "Students are required to study for their classes";
    }
    public function homework(){
        echo "Students have to do their homework to get better understanding of what they are learning in class";
    }

}

?>

