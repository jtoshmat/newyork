<?php
$keyword = $_GET['keyword']??null;

if (!$keyword){
    exit("Keyword is empty");
}

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://imdb8.p.rapidapi.com/title/find?q=$keyword",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: imdb8.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ),
));

$response = curl_exec($curl);

$outputs = json_decode($response, true);

$err = curl_error($curl);

curl_close($curl);


if ($err) {
    exit("cURL Error #:" . $err);
}
$results = $outputs['results']
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>runningTimeInMinutes</th>
        <th>title</th>
        <th>titleType</th>
        <th>year</th>
        <th>principals</th>
    </tr>
    <?php
    foreach ($results as $result) {
        ?>
        <tr>
            <td><?=$result['id']?></td>
            <td>
                <?php
                    $img = $result['image']['url']??null;
                    if ($img) {
                        ?>
                        <img class="img" src="<?=$img?>">
                        <?php
                    }
                ?>

            </td>
            <td><?=$result['runningTimeInMinutes']??null?></td>
            <td><?=$result['title']??null?></td>
            <td><?=$result['titleType']??null?></td>
            <td><?=$result['year']??null?></td>
            <td><?=$result['principals'][0]['legacyNameText']??null?></td>
        </tr>

        <?php
    }
    ?>

</table>

<style>


    .img{
        width: 200px;
        height: 200px;
    }
</style>


</body>
</html>
