<?php
include("../../config.php");
$suspect = $_POST['suspect'];
$currentPick = $_POST['currentPick'];
$username = $_POST['username'];


if($suspect == $currentPick) {
    die;
} else {
    $cancelExistingVote = mysqli_query($conn, "UPDATE suspects SET votes = votes - 1 WHERE id='$currentPick'");
    $updateQuery = mysqli_query($conn, "UPDATE suspects SET votes = votes + 1 WHERE id='$suspect'");
    $update2 = mysqli_query($conn, "UPDATE detectives SET currentPick = '$suspect' WHERE username ='$username'");
}














// if($suspect !== $currentPick) {
//     $cancelExistingVote = mysqli_query($conn, "UPDATE suspects SET votes = votes - 1 WHERE id='$currentPick'");
// };

// $updateQuery = mysqli_query($conn, "UPDATE suspects SET votes = votes + 1 WHERE id='$suspect'");
// $update2 = mysqli_query($conn, "UPDATE detectives SET currentPick = '$suspect' WHERE username ='Dharma'");
?>