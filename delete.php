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

	// Often these are form values in $_POST
	$id = (int) $_POST ['id'];
	
	


	


	// 2. Perform database query
	$query  = "DELETE FROM response09 ";
	$query .= "WHERE id = {$id} ";
	$query .= "LIMIT 1";

	

	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="en">
	<head>
		<title>Database Delete - Subjects table</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    	<link rel="stylesheet" href="css/styles.css">
    	<link rel="stylesheet" href="css/boxes.css">
    	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   </head>
   <body>

     <?php include "admin-nav.inc" ?>

     <div class="container">
 	 
 	 <div class=" box1 container">

		<div class="opaque">
			<h1>Database Delete - Subjects table</h1>
		</div>

		<?php
			if ($result) {
		?>
			<div class="alert alert-success">
			  <strong>Success!</strong> Account # <?php echo $id ?> has been deleted. <a href="response-table.php" class="alert-link">Back to the Response Table</a>.
			</div>
		<?php
			} else {
				die("Database query failed.");
			}
		?>
	</div>
</div>
	</body>
</html>

<?php
	// 5. Close database connection
	mysqli_close($connection);
?>