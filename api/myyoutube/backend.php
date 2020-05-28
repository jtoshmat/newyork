<?php
$keyword = $_POST['keyword']??'Jon Toshmatov';
if (!$keyword){
    exit(false);
}
$keyword = urlencode($keyword);


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://youtube-search1.p.rapidapi.com/".$keyword,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: youtube-search1.p.rapidapi.com",
        "x-rapidapi-key: AbuDeCYTE1mshKONOsCHvQgGl1Y9p1TcQATjsn0KoIzbbjIDCy"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


echo "<pre>";

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo "<hr>";
    echo $response;
    echo "<hr>";
    $results = json_decode($response,true);
    include '../../inc/database.php';
    $db = new \Database\database('dbq');



    foreach ($results['items'] as $result){
            $videoId = $result['id']['videoId'];
            $url = $result["url"];
            $title = ($result["title"]);
            $thumbHigh = addslashes($result["thumbHigh"]);
            $thumbAnim = addslashes($result["thumbAnim"]);
            $channelTitle = addslashes($result["channelTitle"]);
            $channelId = addslashes($result["channelId"]);
            $channelUrl = addslashes($result["channelUrl"]);
            $publishedAt = $result["publishedAt"];
            $duration = $result["duration"];
            $viewCount = $result["viewCount"];

            $sql = "INSERT INTO videos (videoId, url, title, thumbHigh,thumbAnim, channelTitle, channelId, channelUrl, publishedAt, duration, viewCount) VALUES(
            '{$videoId}','{$url}','{$title}','{$thumbHigh}','{$thumbAnim}','{$channelTitle}','{$channelId}','{$channelUrl}','{$publishedAt}','{$duration}','{$viewCount}');";
            $created = $db->sql($sql);
            echo $videoId .":". $url . "<hr>";

            echo "<hr>";

            echo $sql . "<hr>";
    }



}

/*
 * ["items"]=>
  array(18) {
    [0]=>
    array(11) {
      ["id"]=>
      array(1) {
        ["videoId"]=>
        string(11) "rh5J67NIMbo"
      }
      ["url"]=>
      string(43) "https://www.youtube.com/watch?v=rh5J67NIMbo"
      ["title"]=>
      string(99) "Amerikada O'zbeklar qancha topadi? Vatandoshimiz Jon Toshmatov: Ishga va O`quv kursga Marxamat!!!!!"
      ["thumbHigh"]=>
      string(131) "https://i.ytimg.com/vi/rh5J67NIMbo/hqdefault.jpg?sqp=-oaymwEYCKgBEF5IVfKriqkDCwgBFQAAiEIYAXAB&rs=AOn4CLBER651WcRqu4CXdqrH7F9WjZ1b0g"
      ["thumbAnim"]=>
      string(116) "https://i.ytimg.com/an_webp/rh5J67NIMbo/mqdefault_6s.webp?du=3000&sqp=CK76sPYF&rs=AOn4CLDyww7WCRBCSo24q7NDJOiMTD_08Q"
      ["channelTitle"]=>
      string(10) "MrOtabekTV"
      ["channelId"]=>
      string(24) "UCV69OvyccrSDG1ZpA7KBvpQ"
      ["channelUrl"]=>
      string(56) "https://www.youtube.com/channel/UCV69OvyccrSDG1ZpA7KBvpQ"
      ["publishedAt"]=>
      string(13) "vor 4 Monaten"
      ["duration"]=>
      string(5) "30:52"
      ["viewCount"]=>
      string(14) "40.426 Aufrufe"
    }
 */

