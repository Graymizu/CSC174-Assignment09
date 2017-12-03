<?php
	//Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";
	
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	/*
	* NOTE: All the SQL, PHP, and the database need to be changed to accomidate the new information obtained by the survey 
	* (just follow the pattern of what's altready there)
	*/	
	
	//Get values and escape strings
	$fname = trim(stripslashes($_POST['fname']));
	$lname = trim(stripslashes($_POST['lname']));
	$email = trim(stripslashes($_POST['email']));

	//error fix for radio buttons and checkboxes
	$blank = "";
	if(empty($_POST['familiar1'])){
		$fam1 = $blank;
	}else{
		$fam1 = Trim(stripslashes($_POST['familiar1']));
	}
	if(empty($_POST['do1a'])){
		$do1a = $blank;
	}else{
		$do1a = $_POST['do1a']; 
	}
	if(empty($_POST['do1b'])){
		$do1b = $blank;
	}else{
		$do1b = $_POST['do1b']; 
	}
	if(empty($_POST['do1c'])){
		$do1c = $blank;
	}else{
		$do1c = $_POST['do1c']; 
	}
	if(empty($_POST['do1d'])){
		$do1d = $blank;
	}else{
		$do1d = $_POST['do1d']; 
	}
	if(empty($_POST['do1e'])){
		$do1e = $blank;
	}else{
		$do1e = $_POST['do1e']; 
	}
	if(empty($_POST['do1f'])){
		$do1f = $blank;
	}else{
		$do1f = $_POST['do1f']; 
	}
	$why1 = Trim(stripslashes($_POST['why1']));


	
	if(empty($_POST['familiar2'])){
		$fam2 = $blank;
	}else{
		$fam2 = Trim(stripslashes($_POST['familiar2']));
	}
	if(empty($_POST['do2a'])){
		$do2a = $blank;
	}else{
		$do2a = $_POST['do2a'];
	}
	if(empty($_POST['do2b'])){
		$do2b = $blank;
	}else{
		$do2b = $_POST['do2b'];
	}
	if(empty($_POST['do2c'])){
		$do2c = $blank;
	}else{
		$do2c = $_POST['do2c'];
	}
	if(empty($_POST['do2d'])){
		$do2d = $blank;
	}else{
		$do2d = $_POST['do2d'];
	}
	if(empty($_POST['do2e'])){
		$do2e = $blank;
	}else{
		$do2e = $_POST['do2e'];
	}
	if(empty($_POST['do2f'])){
		$do2f = $blank;
	}else{
		$do2f = $_POST['do2f'];
	}
	$why2 = Trim(stripslashes($_POST['why2']));


	
	$fam3 = trim(stripslashes($_POST['familiar3']));
	if(empty($_POST['do3a'])){
		$do3a = $blank;
	}else{
		$do3a = $_POST['do3a'];
	}
	if(empty($_POST['do3b'])){
		$do3b = $blank;
	}else{
		$do3b = $_POST['do3b'];
	}
	if(empty($_POST['do3c'])){
		$do3c = $blank;
	}else{
		$do3c = $_POST['do3c'];
	}
	if(empty($_POST['do3d'])){
		$do3d = $blank;
	}else{
		$do3d = $_POST['do3d'];
	}
	if(empty($_POST['do3e'])){
		$do3e = $blank;
	}else{
		$do3e = $_POST['do3e'];
	}
	if(empty($_POST['do3f'])){
		$do3f = $blank;
	}else{
		$do3f = $_POST['do3f'];
	}
	$why3 = Trim(stripslashes($_POST['why3']));
	
	$name = mysqli_real_escape_string($connection, $name);
	$email = mysqli_real_escape_string($connection, $email);
	$fam1 = mysqli_real_escape_string($connection, $fam1);
	$fam2 = mysqli_real_escape_string($connection, $fam2);
	$fam3 = mysqli_real_escape_string($connection, $fam3);
	$why1 = mysqli_real_escape_string($connection, $why1);
	$why2 = mysqli_real_escape_string($connection, $why2);
	$why3 = mysqli_real_escape_string($connection, $why3);
	
	// SQL Insert query into the database: responses

	$query = "INSERT INTO response09 (";
	$query .=" fname, lname, email, siamese1, siamese2, siamese3, maine1, maine2, maine3, american1, american2, american3";
	$query .=") VALUES (";
	$query .="'{$fname}', '{$lname}', '{$email}', '{$siamese1}', '{$siamese2}', '{$siamese3}', '{$maine1}', '{$maine2}', '{$maine3}', '{$american1}', '{$american2}', '{$american3}'";
	$query .=")";
	
	$result = mysqli_query($connection, $query);
?>
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Confirmation Page</title>
	</head>
	<body>
		<?php
			if ($result) {
				echo "<h1>Thank you!</h1>
				Your response has been recorded.";
			} else {
				die("Database query failed: ".mysqli_error($connection));
			}
		?>

		<form method="post" action="survey.html">
			<input type="submit" value="Back to Survey">
		</form>
	</body>
</html>

<?php
	mysqli_close($connection);
?>