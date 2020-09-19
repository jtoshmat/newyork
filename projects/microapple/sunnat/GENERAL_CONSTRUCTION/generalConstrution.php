<?php
namespace Gilbane;
require_once 'rules.php';
require_once 'DOB.php';
class GeneralConstrution implements Rules {
    use \DOB;
    public function clothes()
    {
        return "Everybody use hardheat,glasses,vest,highvisiblity shirts,jeans,boots.";
    }
    public function lunchTime()
    {
        return "Lunch time start 12:00pm by 3:00pm also coffee time 09:00am by 09:00am";
    }
    public function workingTimes()
    {
        return "working times start 07:00am by 03:00pm Monday by Friday also Saturday and Sunday off";
    }
    public function RespectColleagues()
    {
        return "Respect the workers , be polay,dont cursing,not discrimination";
    }
    public function emergency()
    {
       return "Anybody has accident and feeling sick let GS knows";
    }
    public function plumbing(){
        return "Dont use pvc pipe for sewer line, use nohub pipes";
    }
    protected function plumbingSalary(){
        return "We will pay for 1st floor 10000$";
    }
    public function electrical(){
        return "Fix the joinbox on 24th floor please";
    }
    protected function electricalSalary(){
        return "All job get done then we will pay 20000$";
    }
    public function hvac(){
        return "All duct work should be done today";
    }
    protected function hvacSalary(){
        return "We will pay for this job site 30000$";
    }
    public function labors(){
        return "please clean all stairs";
    }
    protected function laborsSalary(){
        return "Every labor workers get bonus this week";
    }
    public function painters(){
        return "please paint the all doors on 1st floor";
    }
    protected function paintersSalary(){
        return "After pain the doors on 1st floor we will pay 10000$";
    }
}

