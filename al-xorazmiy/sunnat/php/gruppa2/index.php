<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../css/bootstrap.css">
</head>
<body>
<?php

include "backend12.php";

?>

<div class="container-fluid">

    <form method="get">
        <div class="input-group mb-3">
            <input name="mma" value="<?=$news?>"  type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
    </form>
    <table class="table table-bordered">
        <? foreach ($News as $news):?>
        <tr><td>Title: </td><td><?=$News->latestNews[1]->title?></td></tr>
        <tr><td>description: </td><td><?=$News->latestNews[1]->description?></td></tr>
        <tr><td>imgUrl: </td><td><?=$News->latestNews[1]->imgUrl?></td></tr>
        <tr><td>thumbnail: </td><td><?=$News->latestNews[1]->thumbnail?></td></tr>
        <tr><td>sourceUrl: </td><td><?=$News->latestNews[1]->sourceUrl?></td></tr>
        <tr><td>publishedAt: </td><td><?=$News->latestNews[1]->publishedAt?></td></tr>
        <tr><td>author: </td><td><?=$News->latestNews[1]->author?></td></tr>
    </table>
    <?endforeach;?>

</div>

<?php
echo "<pre>";
var_dump($News);
echo "<pre>";

?>

</body>
</html>
