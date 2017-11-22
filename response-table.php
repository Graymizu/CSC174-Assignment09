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
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="wrapping-paper">
		<h1>View Responses</h1>

		<table class="result-table">
		
		<!-- Table headers -->
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Siamese</th>
			<th>Why?</th>
			<th>Maine Coon</th>
			<th>Why?</th>
			<th>Kitten</th>
			<th>Why?</th>
			<!-- <th>Delete?</th> -->
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
				<td><?php echo $responses["fam1"].", ".$responses["do1a"]." ".$responses["do1b"]." ".$responses["do1c"]." ".$responses["do1d"]; ?></td>
				<td><?php echo $responses["why1"]; ?></td>
				<td><?php echo $responses["fam2"].", ".$responses["do2a"]." ".$responses["do2b"]." ".$responses["do2c"]." ".$responses["do2d"]; ?></td>
				<td><?php echo $responses["why2"]; ?></td>
				<td><?php echo $responses["fam3"].", ".$responses["do3a"]." ".$responses["do3b"]." ".$responses["do3c"]." ".$responses["do3d"]; ?></td>
				<td><?php echo $responses["why3"]; ?></td>
				<!-- <td><button class="delete" onclick="delete()">Delete</button></td> -->
			</tr>

	<?php } ?>

		</table>

		<br>
		<a href="update.html">Update a Response</a>
		<br>
		<a href="delete.html">Delete a Response</a>
		<br>
		<a href="survey.html">Return to Survey</a>
	</div>
</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
