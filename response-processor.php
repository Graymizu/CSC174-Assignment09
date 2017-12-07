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
	if (isset($_POST['fname'])) 
	$fname = trim(stripslashes($_POST['fname']));
	if (isset($_POST['lname'])) 
	$lname = trim(stripslashes($_POST['lname']));
	if (isset($_POST['email'])) 
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
	if (isset($_POST['siamese3'])) 
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
	if (isset($_POST['maine3'])) 
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
	if (isset($_POST['american3'])) 
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
	if (isset($_POST['ragamuffin3'])) 
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
	if (isset($_POST['ragdoll3'])) 
	$ragdoll3 = Trim(stripslashes($_POST['ragdoll3']));
	if(empty($_POST['bengal1'])){
		$bengal1 = $blank;
	}else{
		$bengal1 = Trim(stripslashes($_POST['bengal1']));
	}
	if(empty($_POST['bengal2a'])){
		$bengal2a = $blank;
	}else{
		$bengal2a = $_POST['bengal2a'];
	}
	if(empty($_POST['rbengal2b'])){
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
	if (isset($_POST['bengal3'])) 
	$bengal3 = Trim(stripslashes($_POST['bengal3']));
	
	if (isset($_POST['fname'])) { echo "fname";
	$fname = mysqli_real_escape_string($connection, $fname);}
	if (isset($_POST['lname'])) 
	$lname = mysqli_real_escape_string($connection, $lname);
	if (isset($_POST['email'])) 
	$email = mysqli_real_escape_string($connection, $email);
	if (isset($_POST['siamese1'])) 
	$siamese1 = mysqli_real_escape_string($connection, $siamese1);
	if (isset($_POST['maine1'])) 
	$maine1 = mysqli_real_escape_string($connection, $maine1);
	if (isset($_POST['american1'])) 
	$american1 = mysqli_real_escape_string($connection, $american1);
	if (isset($_POST['ragamuffin1'])) 
	$ragamuffin1 = mysqli_real_escape_string($connection, $ragamuffin1);
	if (isset($_POST['ragdoll1'])) 
	$ragdoll1 = mysqli_real_escape_string($connection, $ragdoll1);
	if (isset($_POST['bengal1'])) 
	$bengal1 = mysqli_real_escape_string($connection, $bengal1);
	if (isset($_POST['siamese3'])) 
	$siamese3 = mysqli_real_escape_string($connection, $siamese3);
	if (isset($_POST['maine3'])) 
	$maine3 = mysqli_real_escape_string($connection, $maine3);
	if (isset($_POST['american3'])) 
	$american3 = mysqli_real_escape_string($connection, $american3);
	if (isset($_POST['ragamuffin3'])) 
	$ragamuffin3 = mysqli_real_escape_string($connection, $ragamuffin3);
	if (isset($_POST['ragdoll3'])) 
	$ragdoll3 = mysqli_real_escape_string($connection, $ragdoll3);
	if (isset($_POST['bengal3'])) 
	$bengal3 = mysqli_real_escape_string($connection, $bengal3);
	// SQL Insert query into the database: responses
	$query = "INSERT INTO response09 (";
	$query .=" fname, lname, email, 
		siamese1, siamese2a, siamese2b, siamese2c, siamese2d, siamese2e, siamese2f, siamese3, 
		maine1, maine2a, maine2b, maine2c, maine2d, maine2e, maine2f, maine3, 
		american1, american2a, american2b, american2c, american2d, american2e, american2f, american3, 
		ragamuffin1, ragamuffin2a, ragamuffin2b, ragamuffin2c, ragamuffin2d, ragamuffin2e, ragamuffin2f, ragamuffin3, 
		ragdoll1, ragdoll2a, ragdoll2b, ragdoll2c, ragdoll2d, ragdoll2e, ragdoll2f, ragdoll3, 
		bengal1, bengal2a, bengal2b, bengal2c, bengal2d, bengal2e, bengal2f, bengal3";
	$query .=") VALUES (";
	$query .="'{$fname}','{$lname}', '{$email}', 
	'{$siamese1}', '{$siamese2a}', '{$siamese2b}', '{$siamese2c}', '{$siamese2d}', '{$siamese2e}', '{$siamese2f}', '{$siamese3}', 
	'{$maine1}', '{$maine2a}', '{$maine2b}', '{$maine2c}', '{$maine2d}', '{$maine2e}', '{$maine2f}', '{$maine3}', 
	'{$american1}', '{$american2a}', '{$american2b}','{$american2c}','{$american2d}','{$american2e}','{$american2f}','{$american3}', 
	'{$ragamuffin1}', '{$ragamuffin2a}', '{$ragamuffin2b}', '{$ragamuffin2c}', '{$ragamuffin2d}', '{$ragamuffin2e}', '{$ragamuffin2f}', '{$ragamuffin3}', 
	'{$ragdoll1}', '{$ragdoll2a}', '{$ragdoll2b}', '{$ragdoll2c}', '{$ragdoll2d}', '{$ragdoll2e}', '{$ragdoll2f}', '{$ragdoll3}', 
	'{$bengal1}', '{$bengal2a}', '{$bengal2b}', '{$bengal2c}', '{$bengal2d}', '{$bengal2e}', '{$bengal2f}', '{$bengal3}'";
	$query .=")";
	
	$result = mysqli_query($connection, $query);
?>
	
<!DOCTYPE html>
<html lang="en">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"><!--header font-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--body font-->
    	<link rel="stylesheet" href="css/styles.css">
    	<link rel="stylesheet" href="css/boxes.css">

    <div class="boxlogin container login3">	
	
	<div class="spacing">

	<div class="opaque3">

	<head>
		<title>Confirmation Page</title>
	</head>
	<body>
		<?php
			if ($result) {
				echo "<h1>Thank you!</h1>
				<p>Your response has been recorded.</p>";
			} else {
				die("Database query failed: ".mysqli_error($connection));
			}
		?>

		<form method="post" action="survey.html">
			<input type="submit" value="Back to Survey">
		</form>
	</body>
</div>
</div>
</div>
</html>

<?php
	mysqli_close($connection);
?>
