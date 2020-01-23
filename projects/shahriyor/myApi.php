<?php
namespace Usefultools;

class textToSpeech
{

    public $curl;

    public $parms;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->parms = $_GET;
    }

    private function callCurl()
    {
        $words = strip_tags($this->parms['words']);
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => "https://tts.p.rapidapi.com/v1/tts?voice=The%20name%20of%20the%20voice%20you%20wish%20to%20use.&language=The%20language%20you%20wish%20to%20use%20(default%20is%20usenglish)&text=example&format=mp3",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: tts.p.rapidapi.com",
                "x-rapidapi-key: 5f9f1f49c3msh50724aaabde988dp1831b2jsn8d350e6199c2"
            ),
        ));
    }

    public function search() {
        if(!isset($this->parms['words']));
        return false;
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }
}


$response = curl_exec($this->curl);
$err = curl_error($this->curl);

curl_close($this->curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

$texttospeech = new textToSpeech();
$obj = json_decode($texttospeech->search())
?>