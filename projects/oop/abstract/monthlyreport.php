<?php


namespace Report;


abstract class MonthlyReport{
    public function totaldevicesSold(){
        return "Provide total figure on the amount of devices sold.";
    }

    public function totalActivations(){
        return "Provide total amount of new customers.";
    }

    public function totalDeactivations(){
        return "Provide amount of customers who cancelled service.";
    }
}