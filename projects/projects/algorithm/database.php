<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "dbq";

// Create connection
$conn = new \mysqli($servername, $username, $password, $dbname);
// Check connection

echo "<pre>";
var_dump($conn);
exit;



if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM aiports;";
$result = $conn->query($sql);

var_dump($result);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["city"]. " " . $row["country"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>