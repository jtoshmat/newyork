<?php
namespace Abzalovs;

abstract class FathersAdvice{
    public function buildBusiness(){
        $txt = "<hr>So, here is a  budget for your business<br>";
        $txt .= "I have rented a shop for you in downtown";
        $txt .= "Make, you are successful and rich before your children turn to 21 years old";
        return $txt;
    }


    public function goToGym(){
        return "Son, I built a gym in the basement for you";
    }
}
