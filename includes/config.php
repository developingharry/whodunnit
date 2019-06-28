<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whodunnit";
$timezone = date_default_timezone_set("Europe/London");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//The date that this "season" started (Y/m/d)
$startDate = new DateTime('2019/06/28');
$endDate = (clone $startDate)->modify('+14 days');
$today = new DateTime();
$maxAvailableScore = $endDate->diff($today);

?>