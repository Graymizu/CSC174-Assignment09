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

		<h1>Delete a Response</h1>

		<form method="post" id="form" action="delete.php">
			<span>Please enter the ID of the response you would like to delete.</span>
			<br>
			<input type="number" name="id" id="id">
			<input type="submit" id="delete" value="Delete!">
		</form>

	</body>
</html>