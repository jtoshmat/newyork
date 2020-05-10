<?php
ob_clean();
ob_start();
$url = $_SERVER['HTTP_HOST']??null;

if (strpos($url,'youtube.')>=0){
    echo "Please wait while we are opening the MY-IT-EDUCATION.US Youtube channel for you.";
    header("Location: https://www.youtube.com/channel/UCP9H-H6Tqq1uJP5jQ_7LVJA/videos");
    exit("Please visit our Youtube channel <br> <a href='https://www.youtube.com/channel/UCP9H-H6Tqq1uJP5jQ_7LVJA/videos'>https://www.youtube.com/channel/UCP9H-H6Tqq1uJP5jQ_7LVJA/videos</a>");
}
if (strpos($url,'facebook.')>=0){
    echo "Please wait while we are opening the MY-IT-EDUCATION.US Facebook Page for you.";
    header("Location: https://www.facebook.com/MyITEducation.US");
    exit("Please visit our Facebook Page <br> <a href='https://www.facebook.com/MyITEducation.US'>https://www.facebook.com/MyITEducation.US</a>");
}
if (strpos($url,'telegram.')>=0){
    echo "Please wait while we are opening the MY-IT-EDUCATION.US Facebook Page for you.";
    header("Location: https://t.me/myitedu");
    exit("Please visit our Telegram Page <br> <a href='https://t.me/myitedu'>https://t.me/myitedu</a>");
}
exit("Please visit our site https://my-it-education.us");

ob_end_flush();
?>