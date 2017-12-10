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

	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM response09 ";


	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>View Responses</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"><!--header font-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!--body font-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    	<link rel="stylesheet" href="css/styles.css">
    	<link rel="stylesheet" href="css/boxe.css">
   

	<body>
		<?php include "admin-nav.inc" ?>	

		<div class="container-fluid">
			<h1 class="center">Hi <?php echo $_SESSION['username']; ?>, Happy Editing!</h1>
			<br>

			<div class="container">
				

				<div class="opaque">

				<h1>View Responses</h1>	
				<table class="maint" border>
				
				<!-- Table headers 
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
				
					<th>American1</th>
					<th>American2</th>
					<th>American3</th>

					<th>Bengal1</th>
					<th>Bengal2</th>
					<th>Bengal3</th>

					<th>Maine1</th>
					<th>Maine2</th>
					<th>Maine3</th>

					<th>Ragamuffin1</th>
					<th>Ragamuffin2</th>
					<th>Ragamuffin3</th>

					<th>Ragdoll1</th>
					<th>Ragdoll2</th>
					<th>Ragdoll3</th>

					<th>Siamese1</th>
					<th>Siamese2</th>
					<th>Siamese3</th>

				</tr>
-->
			<?php
				// 3. Use returned data (if any)
				while($responses = mysqli_fetch_assoc($result)) {
					// output data from each row
			?>
					<tbody class="head">
						<tr>
							<th><ins><em>ID</em></ins></th>
							<th><ins><em>Name</em></ins></th>
							<th><ins><em>Email</em></ins></th>
						</tr>
					</tbody>


					<tbody class="hi2">
						<tr>
							<td><?php echo $responses["id"]; ?></td>
							<td><?php echo $responses["fname"]." ".$responses["lname"]; ?></td>
							<td><?php echo $responses["email"]; ?></td>
						</tr>
					</tbody>	

					<tr>
						<th>American1</th>
						<th>American2</th>
						<th>American3</th>						
					</tr>

					<tbody class="hi">
						<tr>
							<td><?php echo $responses["american1"] ?></td>
							<td><?php echo $responses["american2a"]." ".$responses["american2b"]." ".$responses["american2c"]." ".$responses["american2d"]." ".$responses["american2e"]." ".$responses["american2f"]; ?></td>
							<td><?php echo $responses["american3"]; ?></td>
						</tr>
					</tbody>

					<tr>
						<th>Bengal1</th>
						<th>Bengal2</th>
						<th>Bengal3</th>						
					</tr>

					<tbody class="hi">
						<tr>
							<td><?php echo $responses["bengal1"] ?></td>
							<td><?php echo $responses["bengal2a"]." ".$responses["bengal2b"]." ".$responses["bengal2c"]." ".$responses["bengal2d"]." ".$responses["bengal2e"]." ".$responses["bengal2f"]; ?></td>
							<td><?php echo $responses["bengal3"]; ?></td>
						</tr>
					</tbody>	

					<tr>
						<th>Maine1</th>
						<th>Maine2</th>
						<th>Maine3</th>						
					</tr>
					
					<tbody class="hi">					
						<tr>
							<td><?php echo $responses["maine1"] ?></td>
							<td><?php echo $responses["maine2a"]." ".$responses["maine2b"]." ".$responses["maine2c"]." ".$responses["maine2d"]." ".$responses["maine2e"]." ".$responses["maine2f"]; ?></td>
							<td><?php echo $responses["maine3"]; ?></td>
						</tr>
					</tbody>	

					<tr>
						<th>Ragamuffin1</th>
						<th>Ragamuffin2</th>
						<th>Ragamuffin3</th>						
					</tr>
					
					<tbody class="hi">					
						<tr>
							<td><?php echo $responses["ragamuffin1"] ?></td>
							<td><?php echo $responses["ragamuffin2a"]." ".$responses["ragamuffin2b"]." ".$responses["ragamuffin2c"]." ".$responses["ragamuffin2d"]." ".$responses["ragamuffin2e"]." ".$responses["ragamuffin2f"]; ?></td>
							<td><?php echo $responses["ragamuffin3"]; ?></td>
						</tr>
					</tbody>	

					<tr>
						<th>Ragdoll1</th>
						<th>Ragdoll2</th>
						<th>Ragdoll3</th>
					</tr>
					
					<tbody class="hi">					
						<tr>
							<td><?php echo $responses["ragdoll1"] ?></td>
							<td><?php echo $responses["ragdoll2a"]." ".$responses["ragdoll2b"]." ".$responses["ragdoll2c"]." ".$responses["ragdoll2d"]." ".$responses["ragdoll2e"]." ".$responses["ragdoll2f"]; ?></td>
							<td><?php echo $responses["ragdoll3"]; ?></td>				
						</tr>
					</tbody>	

					<tr>
						<th>Siamese1</th>
						<th>Siamese2</th>
						<th>Siamese3</th>
					</tr>
					
					<tbody class="hi">					
						<tr>						
							<td><?php echo $responses["siamese1"] ?></td>
							<td><?php echo $responses["siamese2a"]." ".$responses["siamese2b"]." ".$responses["siamese2c"]." ".$responses["siamese2d"]." ".$responses["siamese2e"]." ".$responses["siamese2f"]; ?></td>
							<td><?php echo $responses["siamese3"]; ?></td>
						</tr>
					</tbody>	


					<tbody class="foot">
							<tr><td colspan="3">&nbsp;</td></tr>
					</tbody>
					<tbody class="foot">
							<tr><td colspan="3">&nbsp;</td></tr>
					</tbody>
		
			<?php } ?>

				</table>
			</div>
		</div>
		</div>	
	</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
