<?php
include("includes/mysqli_connect.php");
include("includes/classes/User.php");
include("includes/classes/Suspect.php");

// session_destroy();
// (logout)

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = new User($mysqli, $_SESSION['userLoggedIn']);
	$username = $userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>

	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">


			<div id="mainViewContainer">

				<div id="mainContent">