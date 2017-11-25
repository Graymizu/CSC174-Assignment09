<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM responses ";


	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>View Responses</title>
	</head>
	<body>
		<h1>View Responses</h1>

		<table border>
		
		<!-- Table headers -->
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Siamese</th>
			<th>Why?</th>
			<th>Maine Coon</th>
			<th>Why?</th>
			<th>American Shorthair</th>
			<th>Why?</th>
			<th>Ragamuffin</th>
			<th>Why?</th>
			<th>Ragdoll</th>
			<th>Why?</th>
			<th>Bengal</th>
			<th>Why?</th>
		</tr>

	<?php
		// 3. Use returned data (if any)
		while($responses = mysqli_fetch_assoc($result)) {
			// output data from each row
	?>

			<tr>
				<td><?php echo $responses["id"]; ?></td>
				<td><?php echo $responses["name"]; ?></td>
				<td><?php echo $responses["email"]; ?></td>
				<td><?php echo $responses["fam1"].", ".$responses["do1a"]." ".$responses["do1b"]." ".$responses["do1c"]." ".$responses["do1d"]." ".$responses["do1e"]." ".$responses["do1f"]; ?></td>
				<td><?php echo $responses["why1"]; ?></td>
				<td><?php echo $responses["fam2"].", ".$responses["do2a"]." ".$responses["do2b"]." ".$responses["do2c"]." ".$responses["do2d"]." ".$responses["do2e"]." ".$responses["do2f"]; ?></td>
				<td><?php echo $responses["why2"]; ?></td>
				<td><?php echo $responses["fam3"].", ".$responses["do3a"]." ".$responses["do3b"]." ".$responses["do3c"]." ".$responses["do3d"]." ".$responses["do3e"]." ".$responses["do3f"]; ?></td>
				<td><?php echo $responses["why3"]; ?></td>
			</tr>

	<?php } ?>

		</table>
	</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
