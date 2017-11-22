<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Often these are form values in $_POST
	$id = (int) $_POST ['id'];
	
	


	


	// 2. Perform database query
	$query  = "DELETE FROM responses ";
	$query .= "WHERE id = {$id} ";
	$query .= "LIMIT 1";

	

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title>Database Delete - Subjects table</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="wrapping-paper">
	<h1>Database Delete - Subjects table</h1>

	<?php
		if ($result) {
			echo "Success! - the query didn't error-out";

		} else {
			die("Database query failed.");
		}
	?>
		<br><br>
		<a href=".">Back to the Index</a>
</div>
</body>
</html>





<?php
	// 5. Close database connection
	mysqli_close($connection);
?>