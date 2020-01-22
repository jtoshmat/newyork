<?php
namespace Alerts;

class Crimealerts{

    public $curl;

    public $parms;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->parms = $_GET;
    }

    private function callCurl(){
        $keyword = strip_tags($this->parms['keyword']);
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => "https://jgentes-crime-data-v1.p.rapidapi.com/crime?startdate=9%2F19%2F2019&enddate=9%2F25%2F2019&lat=40.603645&long=-73.9527059",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: jgentes-Crime-Data-v1.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
            ),
        ));
    }

    public function search(){
        if (!isset($this->parms['keyword'])){
            return false;
        }

        $this->callCurl();
        $response = curl_exec($this->curl);
        $err = curl_error($this->curl);
        if ($err) {
            return $err;
        } else {
            return $response;
        }
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

}

$alerts = new Crimealerts();
$obj = json_decode($alerts->search());

echo "<pre>";
var_dump($obj);

?>