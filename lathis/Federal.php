<?php
namespace FederalLaws;
class Federal
{
public function citizenship(){
    return "Getting US citizenship requires a person to be at least 25 years old";
}
public function votingage(){
    return "Legal voting age in the U.S. is 18";
}
public function presidency(){
    return "Becoming a president requires a person to be at least 35 years old";
}
public function tobacco(){
    return "Selling tobacco products to minors are prohibited";
}
}

$federal = new Federal();
echo $federal->citizenship();