<?php
    namespace Flights;

    $parms = [];

    $parms['trip'] = $_POST['trip']??'round';
    $parms['quantity'] = $_POST['quantity']??1;
    $parms['class'] = $_POST['class']??'economy';
    $parms['from'] = $_POST['from']??'JFK';
    $parms['to'] = $_POST['to']??'SFB';
    $parms['fromdate'] = $_POST['fromdate']??date('Y-m-d');
    $parms['todate'] = $_POST['todate']??date('Y-m-d', strtotime('tomorrow'));

    include_once 'api.php';

    $api = new Api();
    echo "<pre>";

    $api->setPartner('priceline');
    var_dump($api->search($parms));

    echo "<hr>";

    $api->setPartner('expedia');
    var_dump($api->search($parms));









