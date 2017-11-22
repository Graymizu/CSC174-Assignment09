<?php
	//Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	//Get values and escape strings
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
	
		
	$query = "INSERT INTO responses (";
	$query .=" name, email, fam1, do1a, do1b, do1c, do1d, why1, fam2, do2a, do2b, do2c, do2d, why2, fam3, do3a, do3b, do3c, do3d, why3";
	$query .=") VALUES (";
	$query .="'{$name}', '{$email}', '{$fam1}', '{$do1a}', '{$do1b}', '{$do1c}', '{$do1d}', '{$why1}', '{$fam2}', '{$do2a}', '{$do2b}', '{$do2c}', '{$do2d}', '{$why2}', '{$fam3}', '{$do3a}', '{$do3b}', '{$do3c}', '{$do3d}', '{$why3}'";
	$query .=")";
	
	$result = mysqli_query($connection, $query);
?>
	
<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation Page</title>
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div class="wrapping-paper">
			<?php
				if ($result) {
					echo "<h1>Thank you!</h1>
					Your response has been recorded.";
				} else {
					die("Database query failed: ".mysqli_error($connection));
				}
			?>
		</div>
	</body>
</html>

<?php
	mysqli_close($connection);
?>