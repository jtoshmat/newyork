<?php
require_once "../../database.php";
$country = $_POST['country']??'Uzbekistan';
echo $country;

$db = new \Database\database();
$airports = $db->sql("SELECT id, city, country, code FROM airports WHERE country='$country'");
?>
    <tr>
        <th>ID</th>
        <th>City</th>
        <th>Country</th>
        <th>Code</th>
    </tr>
<?php
foreach ($airports as $airport){
    echo "<tr><td>".$airport['id']."</td>";
    echo "<td>".$airport['city']."</td>";
    echo "<td>".$airport['country']."</td>";
    echo "<td>".$airport['code']."</td></tr>";
}
