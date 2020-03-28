<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to study session with Jon Toshmatov</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?require_once 'backend/dbfunctions.php'?>
<div id="project">
    <div class="myheader">
        The Latest World News
    </div>
    <div class="news_search">
        <form method="get">
            <label>Search: </label>
            <input value="<?=$keyword?>" type="text" name="keyword" placeholder="Your keyword" required="required">
            <button class="btn btn-success" type="submit">Go</button>
        </form>
    </div>
    <div class="mytable_div">
        <table class="table table-bordered">
            <tr>
                <th>Image</th>
                <th>Source</th>
                <th>ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Description</th>
                <th>URL</th>
            </tr>

           <?while ($record = $result->fetch_assoc()):?>
            <tr>
                <td class="img_td">
                    <img src="<?=$record['urlToImage']??'https://qtxasset.com/styles/breakpoint_sm_default_480px_w/s3/FierceCable-1511277733/FoxNews_1.png/FoxNews_1.png?MJj2h2PIeFhFvT1H64PDm1Wn22N_odFk&itok=9A4uNsnq';?>">
                </td>

                <td class="source_name"><?=$record['source_name']?></td>
                <td><?=$record['id']?></td>
                <td><?=$record['author']?></td>
                <td><?=$record['title']?></td>
                <td><?=$record['description']?></td>
                <td>
                    <a target="_blank" href="<?=$record['url']?>"><i class="fas fa-link"></i></a>
                </td>
            </tr>
            <?endwhile;?>


        </table>
    </div>
</div>
<?php
    $result->close();
    $mysql->close();
?>
</body>
</html>