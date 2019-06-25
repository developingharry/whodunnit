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

$sql = "SELECT id, forename, surname, alive, guilt FROM suspects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "Suspects:<br>";
    while($row = $result->fetch_assoc()) {
        echo $row["id"]. ". " . $row["forename"]. " " .$row["surname"]. " : ".$row["alive"]." + ".$row["guilt"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>