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
	if(empty($_POST['siamese1'])){
		$siamese1 = $blank;
	}else{
		$siamese1 = Trim(stripslashes($_POST['siamese1']));
	}
	if(empty($_POST['siamese2a'])){
		$siamese2a = $blank;
	}else{
		$siamese2a = $_POST['siamese2a']; 
	}
	if(empty($_POST['siamese2b'])){
		$siamese2b = $blank;
	}else{
		$siamese2b = $_POST['siamese2b']; 
	}
	if(empty($_POST['siamese2c'])){
		$siamese2c = $blank;
	}else{
		$siamese2c = $_POST['siamese2c']; 
	}
	if(empty($_POST['siamese2d'])){
		$siamese2d = $blank;
	}else{
		$siamese2d = $_POST['siamese2d']; 
	}
	if(empty($_POST['siamese2e'])){
		$siamese2e = $blank;
	}else{
		$siamese2e = $_POST['siamese2e']; 
	}
	if(empty($_POST['siamese2f'])){
		$siamese2f = $blank;
	}else{
		$siamese2f = $_POST['siamese2f']; 
	}
	$siamese3 = Trim(stripslashes($_POST['siamese3']));


	
	if(empty($_POST['maine1'])){
		$maine1 = $blank;
	}else{
		$maine1 = Trim(stripslashes($_POST['maine1']));
	}
	if(empty($_POST['maine2a'])){
		$maine2a = $blank;
	}else{
		$maine2a = $_POST['maine2a'];
	}
	if(empty($_POST['maine2b'])){
		$maine2b = $blank;
	}else{
		$maine2b = $_POST['maine2b'];
	}
	if(empty($_POST['maine2c'])){
		$maine2c = $blank;
	}else{
		$maine2c = $_POST['maine2c'];
	}
	if(empty($_POST['maine2d'])){
		$maine2d = $blank;
	}else{
		$maine2d = $_POST['maine2d'];
	}
	if(empty($_POST['maine2e'])){
		$maine2e = $blank;
	}else{
		$maine2e = $_POST['maine2e'];
	}
	if(empty($_POST['maine2f'])){
		$maine2f = $blank;
	}else{
		$maine2f = $_POST['maine2f'];
	}
	$maine3 = Trim(stripslashes($_POST['maine3']));

	
	if(empty($_POST['american1'])){
		$american1 = $blank;
	}else{
		$american1 = Trim(stripslashes($_POST['american1']));
	}
	if(empty($_POST['american2a'])){
		$american2a = $blank;
	}else{
		$american2a = $_POST['american2a'];
	}
	if(empty($_POST['american2b'])){
		$american2b = $blank;
	}else{
		$american2b = $_POST['american2b'];
	}
	if(empty($_POST['american2c'])){
		$american2c = $blank;
	}else{
		$american2c = $_POST['american2c'];
	}
	if(empty($_POST['american2d'])){
		$american2d = $blank;
	}else{
		$american2d = $_POST['american2d'];
	}
	if(empty($_POST['american2e'])){
		$american2e = $blank;
	}else{
		$american2e = $_POST['american2e'];
	}
	if(empty($_POST['american2f'])){
		$american2f = $blank;
	}else{
		$american2f = $_POST['american2f'];
	}
	$american3 = Trim(stripslashes($_POST['american3']));


	if(empty($_POST['ragamuffin1'])){
		$ragamuffin1 = $blank;
	}else{
		$ragamuffin1 = Trim(stripslashes($_POST['ragamuffin1']));
	}
	if(empty($_POST['ragamuffin2a'])){
		$ragamuffin2a = $blank;
	}else{
		$ragamuffin2a = $_POST['ragamuffin2a'];
	}
	if(empty($_POST['ragamuffin2b'])){
		$ragamuffin2b = $blank;
	}else{
		$ragamuffin2b = $_POST['ragamuffin2b'];
	}
	if(empty($_POST['ragamuffin2c'])){
		$ragamuffin2c = $blank;
	}else{
		$ragamuffin2c = $_POST['ragamuffin2c'];
	}
	if(empty($_POST['ragamuffin2d'])){
		$ragamuffin2d = $blank;
	}else{
		$ragamuffin2d = $_POST['ragamuffin2d'];
	}
	if(empty($_POST['ragamuffin2e'])){
		$ragamuffin2e = $blank;
	}else{
		$ragamuffin2e = $_POST['ragamuffin2e'];
	}
	if(empty($_POST['ragamuffin2f'])){
		$ragamuffin2f = $blank;
	}else{
		$ragamuffin2f = $_POST['ragamuffin2f'];
	}
	$ragamuffin3 = Trim(stripslashes($_POST['ragamuffin3']));

	
	if(empty($_POST['ragdoll1'])){
		$ragdoll1 = $blank;
	}else{
		$ragdoll1 = Trim(stripslashes($_POST['ragdoll1']));
	}
	if(empty($_POST['ragdoll2a'])){
		$ragdoll2a = $blank;
	}else{
		$ragdoll2a = $_POST['ragdoll2a'];
	}
	if(empty($_POST['ragdoll2b'])){
		$ragdoll2b = $blank;
	}else{
		$ragdoll2b = $_POST['ragdoll2b'];
	}
	if(empty($_POST['ragdoll2c'])){
		$ragdoll2c = $blank;
	}else{
		$ragdoll2c = $_POST['ragdoll2c'];
	}
	if(empty($_POST['ragdoll2d'])){
		$ragdoll2d = $blank;
	}else{
		$ragdoll2d = $_POST['ragdoll2d'];
	}
	if(empty($_POST['ragdoll2e'])){
		$ragdoll2e = $blank;
	}else{
		$ragdoll2e = $_POST['ragdoll2e'];
	}
	if(empty($_POST['ragdoll2f'])){
		$ragdoll2f = $blank;
	}else{
		$ragdoll2f = $_POST['ragdoll2f'];
	}
	$ragdoll3 = Trim(stripslashes($_POST['ragdoll3']));

	$bengal1 = trim(stripslashes($_POST['bengal1']));
	if(empty($_POST['bengal2a'])){
		$bengal2a = $blank;
	}else{
		$belgan2a = $_POST['bengal2a'];
	}
	if(empty($_POST['bengal2b'])){
		$bengal2b = $blank;
	}else{
		$bengal2b = $_POST['bengal2b'];
	}
	if(empty($_POST['bengal2c'])){
		$bengal2c = $blank;
	}else{
		$bengal2c = $_POST['bengal2c'];
	}
	if(empty($_POST['bengal2d'])){
		$bengal2d = $blank;
	}else{
		$bengal2d = $_POST['bengal2d'];
	}
	if(empty($_POST['bengal2e'])){
		$bengal2e = $blank;
	}else{
		$bengal2e = $_POST['bengal2e'];
	}
	if(empty($_POST['bengal2f'])){
		$bengal2f = $blank;
	}else{
		$bengal2f = $_POST['bengal2f'];
	}
	$bengal3 = Trim(stripslashes($_POST['bengal3']));
	
	$name = mysqli_real_escape_string($connection, $name);
	$email = mysqli_real_escape_string($connection, $email);
	$siamese1 = mysqli_real_escape_string($connection, $siamese1);
	$maine1 = mysqli_real_escape_string($connection, $maine1);
	$american1 = mysqli_real_escape_string($connection, $american1);
	$ragamuffin1 = mysqli_real_escape_string($connection, $ragamuffin1);
	$ragdoll1 = mysqli_real_escape_string($connection, $ragdoll1);
	$bengal1 = mysqli_real_escape_string($connection, $bengal1);
	$siamese3 = mysqli_real_escape_string($connection, $siamese3);
	$maine3 = mysqli_real_escape_string($connection, $maine3);
	$american3 = mysqli_real_escape_string($connection, $american3);
	$ragamuffin3 = mysqli_real_escape_string($connection, $ragamuffin3);
	$ragdoll3 = mysqli_real_escape_string($connection, $ragdoll3);
	$bengal3 = mysqli_real_escape_string($connection, $bengal3);

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
