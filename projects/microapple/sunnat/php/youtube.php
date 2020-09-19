<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <?php
    include_once "database.php";
    $db = new \Database\database();
    $videos = $db->sql("SELECT * FROM videos");
    ?>
    <table class="table table-bordered mytable">
        <tr class="th_childs">
            <th>ID</th>
            <th>Play</th>
            <th>Url</th>
            <th>Tittle</th>
        </tr>
        <? foreach ($videos as $video): ?>
            <tr>
                <td><?= $video['id'] ?></td>
                <td>
                    <iframe width="200"
                            height="115"
                            src="https://www.youtube.com/embed/<?=$video['videoId']?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </td>
                <td><?= $video['url'] ?></td>
                <td><?= $video['title'] ?></td>
            </tr>
        <? endforeach; ?>
    </table>
</div>

</body>
</html>

