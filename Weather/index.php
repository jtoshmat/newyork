<?php
namespace Usefultools;

class Weather{

    public $curl;

    public $parms;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->parms = $_GET;
    }

    private function callCurl(){
        $zip = (int) strip_tags($this->parms['zip']);
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => "https://us-weather-by-zip-code.p.rapidapi.com/getweatherzipcode?zip=".$zip,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: us-weather-by-zip-code.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE",
            ),
        ));
    }

    public function search(){
        if (!isset($this->parms['zip'])){
            return false;
        }
        $zip = (int) strip_tags($this->parms['zip']);

        if (strlen($zip)!=5){
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

$obj = new Weather();
$weather = json_decode($obj->search());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather by Zip Code</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <div class="searchform">
    <h4>Weather by Zip Code</h4>
        <form method="get">
        <p>Search: <input value="<?=$obj->parms['zip']??null?>" title="Numbers only please, for example 52001"   minlength="5" maxlength="6" name="zip" type="text" placeholder="Your Zip Code"><button>Search</button></p>
        </form>
    </div>
    <div class="results">
        <div class="myweather">
            <table class="table table-bordered">
                <tr>
                    <td>City</td>
                    <td><?=$weather->City?></td>
                </tr>

                <tr>
                    <td>State</td>
                    <td><?=$weather->State?></td>
                </tr>

                <tr>
                    <td>Faranheit</td>
                    <td><?=$weather->TempF?> &#8457;</td>
                </tr>

                <tr>
                    <td>Celcius</td>
                    <td><?=$weather->TempC?> &#8451;</td>
                </tr>

                <tr>
                    <td>Weather Forecast</td>
                    <td><?=$weather->Weather?></td>
                </tr>

                <tr>
                    <td>Wind Speed</td>
                    <td><?=$weather->WindMPH?></td>
                </tr>

                <tr>
                    <td>Wind Direction</td>
                    <td><?=$weather->WindDir?></td>
                </tr>

                <tr>
                    <td>Humidity</td>
                    <td><?=$weather->RelativeHumidity?></td>
                </tr>

                <tr>
                    <td>Visibility</td>
                    <td><?=$weather->VisibilityMiles?></td>
                </tr>

            </table>
        </div>
    </div>
</div>

<style>
    table{
        background-color: #beb9cd;
    }
    td:first-child{
        background-color: #343434;
        color: #ffe64d;
        width:200px;
    }
    .searchform{
        text-align: center;
    }
</style>

</body>
</html>
