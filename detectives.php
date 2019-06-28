<?php
include("includes/header.php");

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

// $date_now = (new DateTime())->format('Y-m-d');
// echo $date_now;

?>