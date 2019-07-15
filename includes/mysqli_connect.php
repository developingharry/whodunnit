<?php
    ob_start();
    session_start();
    $mysqli = new mysqli("localhost", "root", "", "whodunnit");
    if($mysqli->connect_error) {
    exit('Error connecting to database'); //Should be a message a typical user could understand in production
    }
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli->set_charset("utf8mb4");
?>