<?php
namespace AirKing;
include_once '../api/callhttp.php';


class Search{
    use \CallHttp;
    public $parms;
    public function __construct()

    {
        $this->parms = $_GET;
    }
    public function search(){
        $url = "https://skyscanner-skyscanner-flight-search-v1.p.rapidapi.com/apiservices/browsequotes/v1.0/US/USD/en-US/TAS/JFK/2019-12-01?inboundpartialdate=2019-12-30";
        $results = $this->getResults($url,'GET');
        return $results;
    }
}

$obj = new Search();
$results = json_decode($obj->search(), 1);
echo "<pre>";
var_dump($results);

