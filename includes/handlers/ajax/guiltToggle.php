<?php
include("../../mysqli_connect.php");
$suspect = $_POST['suspect'];
$updateQuery = mysqli_query($mysqli, "UPDATE suspects SET guilt = ! guilt WHERE id='$suspect'");
?>
