<?php
include_once "backend.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>World News</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/sunday.css">
</head>
<body>
<div class="container-fluid">
    <h1>The World News</h1>

    <div class="search_box">
        <form>
            <p>
                <label>Search: </label>
                <input value="<?=$_GET['keyword']??null?>" name="keyword" type="text" placeholder="Your keyword">
                <button type="submit">Search</button>
            </p>
        </form>

    </div>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Source Name</th>
            <th>Author</th>
            <th>Title</th>
            <th>Description</th>
            <th>URL</th>
        </tr>

        <?php
        foreach ($records as $record) {
            ?>
            <tr>
                <td><?=$record['id']?></td>
                <td><?=$record['source_name']?></td>
                <td><?=$record['author']?></td>
                <td><?=$record['title']?></td>
                <td><?=$record['description']?></td>
                <td>
                    <a target="_blank" href="<?=$record['url']?>">
                        <img class="url_icon" src="../../img/url_icon.png">
                    </a>

                </td>
            </tr>

            <?php
        }
        ?>

    </table>
</div>
</body>
</html>

<!--

Today's agenda to cover:

1. TABLE
2. DIV (Box model)

Frontend Development
1. HTML
2. CSS
3. Bootstrap

Backend Development
1. PHP
2. SQL
3. MySQL
-->



