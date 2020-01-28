<?php
include_once "worldnews.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The world news</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container-fluid">
    <div class="mydemo">
        <h1>The World News</h1>
        <div class="searchbox">
            <form method="get">
            <p>
                <label>Search: </label>
                <input value="<?=$obj->parms['keyword']??null;?>" name="keyword" type="text" placeholder="Your keyword">
                <button class="btn btn-success" type="submit">Search</button>
            </p>
            </form>

        </div>
        <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>Author</th>
                <th>Source Name</th>
                <th>Title</th>
                <th>Description</th>
                <th>URL</th>
            </tr>

            <?php
            foreach ($items as $item) {
                ?>
                <tr>
                    <td><?=$item['id']?></td>
                    <td><?=$item['author']?></td>
                    <td><?=$item['source_name']?></td>
                    <td><?=$item['title']?></td>
                    <td><?=$item['description']?></td>
                    <td>
                        <a target="_blank" href="<?=$item['url']?>">
                            <img class="url_icon" src="../img/url_icon.png">
                        </a>
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
    </div>
</div>

</body>
</html>


<!--
Frontend
1. HTML
2. CSS
3. Bootstrap

Backend
4. PHP
5. MySQL
6. SQL

-->