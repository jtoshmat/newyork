<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<?php
include "../../inc/database.php";

$db = new \Database\database();
$videos = $db->sql("SELECT * FROM videos");
?>
<div class="container-fluid">
    <div id="videos">
        <h2>My Youtube Videos</h2>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Play</th>
                <th>Title</th>
                <th>Description</th>
                <th>URL</th>
            </tr>
            <? foreach ($videos as $video): ?>
                <tr>
                    <td><?= $video['id'] ?></td>
                    <td>
                        <iframe width="280" height="180" src="https://www.youtube.com/embed/<?=$video['videoId']?>"
                                frameborder="0"
                                allow="accelerometer;
                                autoplay; encrypted-media;
                                gyroscope; picture-in-picture"
                                allowfullscreen>

                        </iframe>
                    </td>
                    <td><?= $video['title'] ?></td>
                    <td><?= $video['channelTitle'] ?></td>
                    <td>URL</td>
                </tr>
            <? endforeach; ?>

        </table>
    </div>
</div>
<style>

    table td {
        text-align: center;
    }

    .video_image img {
        width: 220px;
    }
</style>
</body>
</html>