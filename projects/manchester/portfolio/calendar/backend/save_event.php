<?php
$parms = $_POST;
$year = $parms['year']??2020;
$month = $parms['month']??date('m');
$day = $parms['day']??date('m');
$time = $parms['event_time'];
$event_time = "$year-$month-$day $time";
$title = strip_tags($parms['title']);
$description= strip_tags($parms['description']);
if (count($parms)>0 || !empty($parms)){
    require_once "../../database.php";
    $db = new \Database\database();
    $sql = "INSERT INTO calendar (title, description,year, month, day, time) VALUES('$title','$description',$year,$month,$day,'$event_time')";
    $db->sql($sql);
    header("Location: http://newyork.local/projects/manchester/portfolio/calendar/test.php?year=$year&month=$month");
    exit("Your event has been saved successfully. You are now being redirected to calendar");
}
header("Location: http://newyork.local/projects/manchester/portfolio/calendar/test.php?year=$year&month=$month&msg=failed");
exit("Your event form contains error(s) . You are now being redirected to calendar");