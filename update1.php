<?php
	// Initialize the session
	session_start();
	 
	// If session variable is not set it will redirect to login page
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	  header("location: login.php");
	  exit;
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Delete</title>
	</head>

	<body>
		
		<?php include "admin-nav.inc" ?>

		<h1>Update a Response</h1>

		<form method="post" id="form" action="update.php">
			<span>Please enter the ID of the response you would like to update.</span>
			<br>
			<input type="number" name="id" id="id" >
			<input type="submit" id="update" value="Find Response">
		</form>

	</body>
</html>
