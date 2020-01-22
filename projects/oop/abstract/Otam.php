<?php
namespace Family;

abstract class Otam{
    public function finishBuildingKitchen(){
        return "Son, build the kitchen with the following materials:<hr>
        <ul>
        <li>brick</li>
         <li>cement</li>
        <li>concrete</li>
         <li>metal frames</li>
         <li>roof</li>
         <li>clay</li> 
         <li>and other materials</li>
         
        </ul>
        ";
    }

    public function setBudget(){
        return "The budget is $1000";
    }
}