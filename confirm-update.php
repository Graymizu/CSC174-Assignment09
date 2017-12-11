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
	
	//Get values and escape strings
	
	$id = (int) $_POST ['id'];
	
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
	$bengal3 = Trim(stripslashes($_POST['bengal3']));
	
	$fname = mysqli_real_escape_string($connection, $fname);
	$lname = mysqli_real_escape_string($connection, $lname);
	$email = mysqli_real_escape_string($connection, $email);

	$siamese1 = mysqli_real_escape_string($connection, $siamese1);
	$siamese2a = mysqli_real_escape_string($connection, $siamese2a);
	$siamese2b = mysqli_real_escape_string($connection, $siamese2b);
	$siamese2c = mysqli_real_escape_string($connection, $siamese2c);
	$siamese2d = mysqli_real_escape_string($connection, $siamese2d);
	$siamese2e = mysqli_real_escape_string($connection, $siamese2e);
	$siamese2f = mysqli_real_escape_string($connection, $siamese2f);				
	$siamese3 = mysqli_real_escape_string($connection, $siamese3);

	$maine1 = mysqli_real_escape_string($connection, $maine1);
	$maine2a = mysqli_real_escape_string($connection, $maine2a);
	$maine2b = mysqli_real_escape_string($connection, $maine2b);
	$maine2c = mysqli_real_escape_string($connection, $maine2c);
	$maine2d = mysqli_real_escape_string($connection, $maine2d);
	$maine2e = mysqli_real_escape_string($connection, $maine2e);
	$maine2f = mysqli_real_escape_string($connection, $maine2f);		
	$maine3 = mysqli_real_escape_string($connection, $maine3);

	$american1 = mysqli_real_escape_string($connection, $american1);
	$american2a = mysqli_real_escape_string($connection, $american2a);
	$american2b = mysqli_real_escape_string($connection, $american2b);	
	$american2c = mysqli_real_escape_string($connection, $american2c);	
	$american2d = mysqli_real_escape_string($connection, $american2d);	
	$american2e = mysqli_real_escape_string($connection, $american2e);	
	$american2f = mysqli_real_escape_string($connection, $american2f);		
	$american3 = mysqli_real_escape_string($connection, $american3);
	
	$ragamuffin1 = mysqli_real_escape_string($connection, $ragamuffin1);
	$ragamuffin2a = mysqli_real_escape_string($connection, $ragamuffin2a);
	$ragamuffin2b = mysqli_real_escape_string($connection, $ragamuffin2b);	
	$ragamuffin2c = mysqli_real_escape_string($connection, $ragamuffin2c);	
	$ragamuffin2d = mysqli_real_escape_string($connection, $ragamuffin2d);	
	$ragamuffin2e = mysqli_real_escape_string($connection, $ragamuffin2e);	
	$ragamuffin2f = mysqli_real_escape_string($connection, $ragamuffin2f);	
	$ragamuffin3 = mysqli_real_escape_string($connection, $ragamuffin3);	

	$ragdoll1 = mysqli_real_escape_string($connection, $ragdoll1);
	$ragdoll2a = mysqli_real_escape_string($connection, $ragdoll2a);	
	$ragdoll2b = mysqli_real_escape_string($connection, $ragdoll2b);	
	$ragdoll2c = mysqli_real_escape_string($connection, $ragdoll2c);	
	$ragdoll2d = mysqli_real_escape_string($connection, $ragdoll2d);	
	$ragdoll2e = mysqli_real_escape_string($connection, $ragdoll2e);	
	$ragdoll2f = mysqli_real_escape_string($connection, $ragdoll2f);		
	$ragdoll3 = mysqli_real_escape_string($connection, $ragdoll3);
	
	$bengal1 = mysqli_real_escape_string($connection, $bengal1);
	$bengal2a = mysqli_real_escape_string($connection, $bengal2a);
	$bengal2b = mysqli_real_escape_string($connection, $bengal2b);
	$bengal2c = mysqli_real_escape_string($connection, $bengal2c);
	$bengal2d = mysqli_real_escape_string($connection, $bengal2d);
	$bengal2e = mysqli_real_escape_string($connection, $bengal2e);
	$bengal2f = mysqli_real_escape_string($connection, $bengal2f);
	$bengal3 = mysqli_real_escape_string($connection, $bengal3);
	
	// 2. Perform database query
	$query  = "UPDATE response09 SET ";
	$query .= "fname = '{$fname}', ";
	$query .= "lname = '{$lname}', ";
	$query .= "email = '{$email}', ";

	$query .= "siamese1 = '{$siamese1}', ";
	$query .= "siamese2a = '{$siamese2a}', ";
	$query .= "siamese2b = '{$siamese2b}', ";
	$query .= "siamese2c = '{$siamese2c}', ";
	$query .= "siamese2d = '{$siamese2d}', ";
	$query .= "siamese2e = '{$siamese2e}', ";
	$query .= "siamese2f = '{$siamese2f}', ";
	$query .= "siamese3 = '{$siamese3}', ";

	$query .= "maine1 = '{$maine1}', ";
	$query .= "maine2a = '{$maine2a}', ";
	$query .= "maine2b = '{$maine2b}', ";
	$query .= "maine2c = '{$maine2c}', ";
	$query .= "maine2d = '{$maine2d}', ";
	$query .= "maine2e = '{$maine2e}', ";
	$query .= "maine2f = '{$maine2f}', ";
	$query .= "maine3 = '{$maine3}', ";

	$query .= "american1 = '{$american1}', ";
	$query .= "american2a = '{$american2a}', ";
	$query .= "american2b = '{$american2b}', ";
	$query .= "american2c = '{$american2c}', ";
	$query .= "american2d = '{$american2d}', ";
	$query .= "american2e = '{$american2e}', ";
	$query .= "american2f = '{$american2f}', ";
	$query .= "american3 = '{$american3}', ";

	$query .= "ragamuffin1 = '{$ragamuffin1}', ";
	$query .= "ragamuffin2a = '{$ragamuffin2a}', ";
	$query .= "ragamuffin2b = '{$ragamuffin2b}', ";
	$query .= "ragamuffin2c = '{$ragamuffin2c}', ";
	$query .= "ragamuffin2d = '{$ragamuffin2d}', ";
	$query .= "ragamuffin2e = '{$ragamuffin2e}', ";
	$query .= "ragamuffin2f = '{$ragamuffin2f}', ";
	$query .= "ragamuffin3 = '{$ragamuffin3}', ";

	$query .= "ragdoll1 = '{$ragdoll1}', ";
	$query .= "ragdoll2a = '{$ragdoll2a}', ";
	$query .= "ragdoll2b = '{$ragdoll2b}', ";
	$query .= "ragdoll2c = '{$ragdoll2c}', ";
	$query .= "ragdoll2d = '{$ragdoll2d}', ";
	$query .= "ragdoll2e = '{$ragdoll2e}', ";
	$query .= "ragdoll2f = '{$ragdoll2f}', ";
	$query .= "ragdoll3 = '{$ragdoll3}', ";

	$query .= "bengal1 = '{$bengal1}', ";
	$query .= "bengal2a = '{$bengal2a}', ";
	$query .= "bengal2b = '{$bengal2b}', ";
	$query .= "bengal2c = '{$bengal2c}', ";
	$query .= "bengal2d = '{$bengal2d}', ";
	$query .= "bengal2e = '{$bengal2e}', ";
	$query .= "bengal2f = '{$bengal2f}', ";
	$query .= "bengal3 = '{$bengal3}' ";

	$query .= "WHERE id = {$id}";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="en">
	<head>
		<title>Success</title>
		<meta charset="utf-8"> <!-- W3C and Bootstrap styling -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<link rel="stylesheet" href="css/styles.css">
    	<link rel="stylesheet" href="css/boxes.css">
    	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
   <body>

     <?php include "admin-nav.inc" ?>

     <div class="container-fluid">

		<div class=" box1 container">


			<div class="opaque">
				<h1>Database Update - Response Table</h1>
			</div>

			<?php
				if ($result) {
			?>
				<div class="alert alert-success">
				  <strong>Success!</strong> The update to account # <?php echo $id ?> has been completed. <a href="response-table.php" class="alert-link">Back to the Response Table</a>.
				</div>
			<?php
				} else {
					die("Database query failed.".$result.".");
				}
			?>
		</div>
	</body>
</html>


<?php
	// 5. Close database connection
	mysqli_close($connection);
?>