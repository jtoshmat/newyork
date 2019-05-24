<?php

    // initialise variables here
    $chat_id = 646066;
// path to the picture,
    $text = 'Hammaga Salom!';
// following ones are optional, so could be set as null
    $disable_web_page_preview = null;
    $reply_to_message_id = null;
    $reply_markup = null;

    $data = array(
        'chat_id' => urlencode($chat_id),
        'text' => urlencode($text),
        'disable_web_page_preview' => urlencode($disable_web_page_preview),
        'reply_to_message_id' => urlencode($reply_to_message_id),
        'reply_markup' => urlencode($reply_markup)
    );

    $url = "https://api.telegram.org/bot856071948:AAFGDmUnov5ltIwLl4BDgfBjy_clQ8TK__U/getMessage";

//  open connection
$ch = curl_init();
//  set the url
curl_setopt($ch, CURLOPT_URL, $url);
//  number of POST vars
curl_setopt($ch, CURLOPT_POST, count($data));
//  POST data
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//  To display result of curl
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//  execute post
$result = curl_exec($ch);
//  close connection

    var_dump($result);
curl_close($ch);