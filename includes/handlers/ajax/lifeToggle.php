<?php
include("../../config.php");
$suspect = $_POST['suspect'];
$updateQuery = mysqli_query($conn, "UPDATE suspects SET alive = ! alive WHERE id='$suspect'");
?>
