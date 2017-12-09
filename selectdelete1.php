<?php
	// Initialize the session
	session_start();
	 
	// If session variable is not set it will redirect to login page
	if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
	  header("location: login.php");
	  exit;
	}
?>

<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM response09 ";


	$result = $connection->query($query);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Delete</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"><!--header font-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--body font-->
   	 	<link rel="stylesheet" href="css/grid.css">
    	<link rel="stylesheet" href="css/styles.css">
	</head>

	<body>
		<?php include "admin-nav.inc" ?>

		<div class="container">

			<h1>Delete a Response</h1>

			<form method="post" id="form" action="delete.php">
				<span>Please enter the ID of the response you would like to delete.</span>
				<br>
				<input type="number" name="id" id="id" required>
				<input type="submit" id="delete" value="Delete!">
			</form>

			<table border>
				<tr>
					<td> ID# </td>
					<td> First Name </td>
					<td> Last Name </td>
					<td> Email </td>
					<td>Amrican Shorthair</td>
					<td>Bengal</td>
					<td>Maine Coon</td>
					<td>Ragamuffin</td>
					<td>Ragdoll</td>
					<td>Siamese</td>
				</tr>

	<?php
		// 3. Use returned data (if any)
		while($row = mysqli_fetch_assoc($result)) {
			// output data from each row
	?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["fname"]; ?></td>
					<td><?php echo $row["lname"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["american1"]; ?></td>
					<td><?php echo $row["bengal1"]; ?></td>
					<td><?php echo $row["maine1"]; ?></td>
					<td><?php echo $row["ragamuffin1"]; ?></td>
					<td><?php echo $row["ragdoll1"]; ?></td>
					<td><?php echo $row["siamese1"]; ?></td>
				</tr>
	<?php } ?>	
			</table>
		</body>
	</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
