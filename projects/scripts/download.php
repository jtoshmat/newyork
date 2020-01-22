<?php
$handle = fopen("links.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        callHttp($line);
    }
    fclose($handle);
}

function callHttp($url){
    $path = 'links';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        $fp = fopen($path . '/links.html', 'w');

        // Set CURL to write to disk
        curl_setopt($ch, CURLOPT_FILE, $fp);

        // Execute download
        curl_exec ($ch);
        curl_close ($ch);

        fclose($fp);
}


?>