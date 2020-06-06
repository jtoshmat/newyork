<?php
$keyword = $_GET ['keyword']??null;

if (!$keyword){
    exit("Your keyword is not found");
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
        "x-rapidapi-key: 682f86f681msha0d383724fb0e02p1c6604jsn223d39fc1e1b"
    ),
));


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $results =  $response;
}
echo "<pre>";

$results = json_decode($results);

 var_dump($results);
exit();
?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Running time</th>
        <th>Title</th>
        <th>Title Type</th>
        <th>Year</th>
        <th>Principals</th>
    </tr>
    <?php
    foreach ($results as $result) {
        ?>
        <tr>
            <td><?= $result ['id'] ?></td>

            <?php
            $img = $result['image']['url'] ?? null;
            if ($img) {
                ?>
                <img class="img" src="<?= $img ?>">
                <?php
            }
            ?>
            </td>
            <td><?= $result['Running time'] ?? null ?></td>
            <td><?= $result['Title'] ?? null ?></td>
            <td><?= $result['Title Type'] ?? null ?></td>
            <td><?= $result['Year'] ?? null ?></td>
            <td><?= $result['Principals'] ?? null ?></td>
        </tr>
        <?php
    }
    ?>
</table>

