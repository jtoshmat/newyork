<?php
namespace Car;

include_once "php_family_car.php";
class Honda extends Ferrari {
    public function miniVan() {
        return "Pagani";
    }
}
$honda = new Honda();


echo $honda->best();
