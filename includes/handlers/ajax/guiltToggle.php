<?php
include("../../config.php");
$suspect = $_POST['suspect'];
$updateQuery = mysqli_query($conn, "UPDATE suspects SET guilt = ! guilt WHERE id='$suspect'");
?>
