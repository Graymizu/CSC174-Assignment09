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
	
	$fname = trim(stripslashes($_POST['fname']));
	$lname = trim(stripslashes($_POST['lname']));
	$email = trim(stripslashes($_POST['email']));
	$siamese1 = trim(stripslashes($_POST['siamese1']));
	$siamese2a = $_POST['siamese2a'];
	$siamese2b = $_POST['siamese2b'];
	$siamese2c = $_POST['siamese2c'];
	$siamese2d = $_POST['siamese2d'];
	$siamese2e = $_POST['siamese2e'];
	$siamese2f = $_POST['siamese2f'];
	$siamese3 = Trim(stripslashes($_POST['siamese3']));
	
	$maine1 = trim(stripslashes($_POST['maine1']));
	$maine2a = $_POST['maine2a'];
	$maine2b = $_POST['maine2b'];
	$maine2c = $_POST['maine2c'];
	$maine2d = $_POST['maine2d'];
	$maine2e = $_POST['maine2e'];
	$maine2f = $_POST['maine2f'];
	$maine3 = Trim(stripslashes($_POST['maine3']));
	
	$american1 = trim(stripslashes($_POST['american1']));
	$american2a = $_POST['american2a'];
	$american2b = $_POST['american2b'];
	$american2c = $_POST['american2c'];
	$american2d = $_POST['american2d'];
	$american2e = $_POST['american2e'];
	$american2f = $_POST['american2f'];
	$american3 = Trim(stripslashes($_POST['american3']));

	$ragamuffin1 = trim(stripslashes($_POST['ragamuffin1']));
	$ragamuffin2a = $_POST['ragamuffin2a'];
	$ragamuffin2b = $_POST['ragamuffin2b'];
	$ragamuffin2c = $_POST['ragamuffin2c'];
	$ragamuffin2d = $_POST['ragamuffin2d'];
	$ragamuffin2e = $_POST['ragamuffin2e'];
	$ragamuffin2f = $_POST['ragamuffin2f'];
	$ragamuffin3 = Trim(stripslashes($_POST['ragamuffin3']));

	$ragdoll1 = trim(stripslashes($_POST['ragdoll1']));
	$ragdoll2a = $_POST['ragdoll2a'];
	$ragdoll2b = $_POST['ragdoll2b'];
	$ragdoll2c = $_POST['ragdoll2c'];
	$ragdoll2d = $_POST['ragdoll2d'];
	$ragdoll2e = $_POST['ragdoll2e'];
	$ragdoll2f = $_POST['ragdoll2f'];
	$ragdoll3 = Trim(stripslashes($_POST['ragdoll3']));

	$bengal1 = trim(stripslashes($_POST['bengal1']));
	$bengal2a = $_POST['bengal2a'];
	$bengal2b = $_POST['bengal2b'];
	$bengal2c = $_POST['bengal2c'];
	$bengal2d = $_POST['bengal2d'];
	$bengal2e = $_POST['bengal2e'];
	$bengal2f = $_POST['bengal2f'];
	$bengal3 = Trim(stripslashes($_POST['bengal3']));
	
	$fname = mysqli_real_escape_string($connection, $fname);
	$lname = mysqli_real_escape_string($connection, $lname);
	$email = mysqli_real_escape_string($connection, $email);
	$siamese3 = mysqli_real_escape_string($connection, $siamese3);
	$maine3 = mysqli_real_escape_string($connection, $maine3);
	$american3 = mysqli_real_escape_string($connection, $american3);
	$ragamuffin3 = mysqli_real_escape_string($connection, $ragamuffin3);
	$ragdoll3 = mysqli_real_escape_string($connection, $ragdoll3);
	$bengal3 = mysqli_real_escape_string($connection, $bengal3);
	
	// 2. Perform database query
	$query  = "UPDATE responses SET ";
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
	$query .= "american3 = '{$american3}'";

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
	$query .= "bengal3 = '{$bengal3}', ";

	$query .= "WHERE id = {$id} ";

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="en">
	<head>
		<title>Success</title>
	</head>
	<body>

		<?php include "admin-nav.inc" ?>

		<h1>Database Update - Response Table</h1>

		<?php
			if ($result) {
				echo "Success! - the query didn't error-out";

			} else {
				die("Database query failed.");
			}
		?>
		<form method="post" action="survey.html">
			<input type="submit" value="Back to Survey">
		</form>
	</body>
</html>


<?php
	// 5. Close database connection
	mysqli_close($connection);
?>