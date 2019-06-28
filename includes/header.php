<?php
include("includes/config.php");

//session_destroy(); LOGOUT

// if(isset($_SESSION['userLoggedIn'])) {
// 	$userLoggedIn = new User($con, $_SESSION['userLoggedIn']);
// 	$username = $userLoggedIn->getUsername();
// 	echo "<script>userLoggedIn = '$username';</script>";
// }
// else {
// 	header("Location: register.php");
// }
?>

<html>
<head>
	<title>Welcome to Whodunnit!</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>

<body>

	<div id="mainContainer">

		<div id="topContainer">


			<div id="mainViewContainer">

				<div id="mainContent">