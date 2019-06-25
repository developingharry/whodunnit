<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whodunnit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, email FROM detectives";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "Detectives:<br>";
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. " - Name: " . $row["username"]. " " ." - Email: ". $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>