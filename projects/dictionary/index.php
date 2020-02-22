<?php
namespace Usefultools;

class Dictionary{

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
            CURLOPT_URL => "https://mashape-community-urban-dictionary.p.rapidapi.com/define?term=$keyword",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: mashape-community-urban-dictionary.p.rapidapi.com",
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

$dictionary = new Dictionary();
$obj = json_decode($dictionary->search());
$results = $obj->list;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Urban Dictionary</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<div class="container-fluid">

    <div class="searchform">
        <h3>Jon's Urban Dictionary</h3>
        <form>
            <p>Search: <input value="<?=$dictionary->parms['keyword']??null?>" name="keyword" type="text" placeholder="Your keyword"><button>Search</button></p>
        </form>
    </div>

    <div class="myresults">
        <h5>Search Results:</h5>

     <ul>
         <?php
         foreach ($results as $result) {

             echo "<li>";
             echo $result->definition;
             echo "<li>";

         }
         ?>

     </ul>

    </div>

</div>

<style>
    .searchform input{
        width:60%;
        margin-bottom: 20px;
    }
    .myresults{
        background-color: #fbfff6;
        border:1px solid black;
        margin:auto;
    }

    body{
        background-color: #1e1a2f;
    }

    .searchform{
        background-color: #ccc9ea;
        text-align: center;
    }

    .myresults li{
        list-style: none;
        border-bottom: 2px dotted #a00848;
        margin-bottom: 10px;

    }
</style>

</body>
</html>








