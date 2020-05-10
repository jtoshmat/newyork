<?php
    namespace Vehicle;
    include "cars.php";

    $object= new cars();
    $object2=new cars();

    $object->setNewEngine("I am new engine 3.6" . "<br>" );
    echo $object->getEngine();

    $object2->setNewEngine("This is sport engine");
    echo $object2->getEngine();

?>


