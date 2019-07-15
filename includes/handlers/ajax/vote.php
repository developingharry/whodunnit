<?php
// include("../../config.php");
include("../../mysqli_connect.php");
$suspect = $_POST['suspect'];
$currentPick = $_POST['currentPick'];
$username = $_POST['username'];
$guilt = $_POST['guilt'];

//The date that this "season" started (Y/m/d)
$startDate = new DateTime('2019/07/14');
$endDate = (clone $startDate)->modify('+14 days');
$today = new DateTime();
$maxScore = $endDate->diff($today);
$streak = $maxScore->format('%a');

$cancelExistingVote = mysqli_query($mysqli, "UPDATE suspects SET votes = votes - 1 WHERE id='$currentPick'");
$updateCurrentPick = mysqli_query($mysqli, "UPDATE detectives SET currentPick = '$suspect' WHERE username ='$username'");
$addVoteToSuspect = mysqli_query($mysqli, "UPDATE suspects SET votes = votes + 1 WHERE id='$suspect'");

$stmt = $mysqli->prepare("SELECT guilt FROM suspects WHERE id = ?");
$stmt->bind_param("s", $_POST['currentPick']);
$stmt->execute();
$stmt->store_result();
if($stmt->num_rows === 0) exit('No rows');
$stmt->bind_result($guilt);
$stmt->fetch();
if ($guilt=="guilty") {
    $stmt1 = $mysqli->prepare("UPDATE detectives SET streak = ? WHERE username = ?");
    $stmt1->bind_param("si", $streak, $username);
    $stmt1->execute();
    $stmt1->close();
}
$stmt->close();
?>