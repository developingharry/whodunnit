<?php
    ob_start();
    session_start();
    
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
?>