<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//Get values and escape strings
	
	$id = (int) $_POST ['id'];
	
	$name = trim(stripslashes($_POST['name']));
	$email = trim(stripslashes($_POST['email']));
	$fam1 = trim(stripslashes($_POST['familiar1']));
	$do1a = $_POST['do1a'];
	$do1b = $_POST['do1b'];
	$do1c = $_POST['do1c'];
	$do1d = $_POST['do1d'];
	$why1 = Trim(stripslashes($_POST['why1']));
	
	$fam2 = trim(stripslashes($_POST['familiar2']));
	$do2a = $_POST['do2a'];
	$do2b = $_POST['do2b'];
	$do2c = $_POST['do2c'];
	$do2d = $_POST['do2d'];
	$why2 = Trim(stripslashes($_POST['why2']));
	
	$fam3 = trim(stripslashes($_POST['familiar3']));
	$do3a = $_POST['do3a'];
	$do3b = $_POST['do3b'];
	$do3c = $_POST['do3c'];
	$do3d = $_POST['do3d'];
	$why3 = Trim(stripslashes($_POST['why3']));
	
	$name = mysqli_real_escape_string($connection, $name);
	$email = mysqli_real_escape_string($connection, $email);
	$fam1 = mysqli_real_escape_string($connection, $fam1);
	$fam2 = mysqli_real_escape_string($connection, $fam2);
	$fam3 = mysqli_real_escape_string($connection, $fam3);
	$why1 = mysqli_real_escape_string($connection, $why1);
	$why2 = mysqli_real_escape_string($connection, $why2);
	$why3 = mysqli_real_escape_string($connection, $why3);
	
	// 2. Perform database query
	$query  = "UPDATE responses SET ";
	$query .= "name = '{$name}', ";
	$query .= "email = '{$email}', ";
	$query .= "fam1 = '{$fam1}', ";
	$query .= "do1a = '{$do1a}', ";
	$query .= "do1b = '{$do1b}', ";
	$query .= "do1c = '{$do1c}', ";
	$query .= "do1d = '{$do1d}', ";
	$query .= "why1 = '{$why1}', ";
	$query .= "fam2 = '{$fam2}', ";
	$query .= "do2a = '{$do2a}', ";
	$query .= "do2b = '{$do2b}', ";
	$query .= "do2c = '{$do2c}', ";
	$query .= "do2d = '{$do2d}', ";
	$query .= "why2 = '{$why2}', ";
	$query .= "fam3 = '{$fam3}', ";
	$query .= "do3a = '{$do3a}', ";
	$query .= "do3b = '{$do3b}', ";
	$query .= "do3c = '{$do3c}', ";
	$query .= "do3d = '{$do3d}', ";
	$query .= "why3 = '{$why3}'";
	$query .= "WHERE id = {$id} ";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<title>Success</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<div class="wrapping-paper">
	<h1>Database Update - Response Table</h1>

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