<?php
namespace mailDepartment;

class Fedex
{
    public function Registration(){
        echo "Welcome to Fedex registration section";
    }

}

$result = new Fedex();
echo $result->Registration();