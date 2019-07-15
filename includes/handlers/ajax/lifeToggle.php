<?php
include("../../mysqli_connect.php");
$suspect = $_POST['suspect'];
$updateQuery = mysqli_query($mysqli, "UPDATE suspects SET alive = ! alive WHERE id='$suspect'");
?>
