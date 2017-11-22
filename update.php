<?php
	// 1. Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_bronx";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_bronx";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	$id = (int) $_POST['id'];

	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM responses ";
	$query .= "WHERE id={$id}";


	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Responses</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="wrapping-paper">
		<h1>Updating Response ID <?php echo $id?></h1>


	<?php
		// 3. Use returned data (if any)
		while($responses = mysqli_fetch_assoc($result)) {
			// output data from each row
			
			// NOTE: Delete button
			// When you add the delete function (I do believe we need that...), put the appropriate URL
			// in place of the "#" in the <a> tag in the last <td>.  You'll probably want to echo out the
			// ID number as part of that URL.
	?>

				<form method="post" class="survey" id="form" action="confirm-update.php">
					<div class="section">
						<h2>Tell Us About Yourself</h2>
						<div>
							<div class="question">
								<span>ID: </span>
								<input readonly type="text" name="id" id="id" value=<?php echo $responses["id"]?>>
							</div>
							<div class="question">
								<span>Your Name:</span>
								<input type="text" name="name" id="name" value="<?php echo $responses["name"]?>">
							</div>
							<div class="question">
								<span>Your Email Address:</span>
								<input type="email" name="email" id="email" value="<?php echo $responses["email"]?>">
							</div>
						</div>
					</div>
				
					<div class="section">
						<h2>Siamese</h2>
					
						<div>
							<img src="images/siamese-cat.jpg" alt="Siamese">
						</div>
					
						<div>
							<div class="question">
								<p>
									<span>Are you familiar with this breed?</span>
									<br>
									<input type="radio" name="familiar1" value="Yes">
									Yes
									<br>
									<input type="radio" name="familiar1" value="No">
									No
									<br>
									<input type="radio" name="familiar1" value="Unsure">
									Unsure
								</p>
							</div>

							<div class="question">
								<p>
									<span>What would you do with this cat (select all that apply)</span>
									<br>
									<input type="checkbox" name="do1a" id="do1a" value="Snuggle">
									Snuggle it
									<br>
									<input type="checkbox" name="do1b" id="do1b" value="Pet">
									Pet It
									<br>
									<input type="checkbox" name="do1c" id="do1c" value="Kick">
									Kick It
									<br>
									<input type="checkbox" name="do1d" id="do1d" value="Let Kill">
									Let it Kill Things
								</p>
							</div>

							<div class="question">
								<span>Tell us why you selected the answers above:</span>
								<br>
								<textarea name="why1" id="why1" value="<?php echo $responses["why1"]?>"></textarea>
							</div>
						</div> <!--end cat 1 questions -->

					</div> <!-- end cat 1 div -->

					<div class="section">
						<h2>Maine Coon</h2>
					
						<div>
							<img src="images/maine-coon.jpg" alt="Maine-Coon">
						</div>
					
						<div>
							<div class="question">
								<p>
									<span>Are you familiar with this breed?</span>
									<br>
									<input type="radio" name="familiar2" value="Yes">
									Yes
									<br>
									<input type="radio" name="familiar2" value="No">
									No
									<br>
									<input type="radio" name="familiar2" value="Unsure">
									Unsure
								</p>
							</div>

							<div class="question">
								<p>
									<span>What would you do with this cat (select all that apply)</span>
									<br>
									<input type="checkbox" name="do2a" id="do2a" value="Snuggle">
									Snuggle it
									<br>
									<input type="checkbox" name="do2b" id="do2b" value="Pet">
									Pet It
									<br>
									<input type="checkbox" name="do2c" id="do2c" value="Kick">
									Kick It
									<br>
									<input type="checkbox" name="do2d" id="do2d" value="Let Kill">
									Let it Kill Things
								</p>
							</div>

							<div class="question">
								<span>Tell us why you selected the answers above:</span>
								<br>
								<textarea name="why2" id="why2" value="<?php echo $responses["why2"]?>"></textarea>
							</div>
						</div><!--end cat2 questions -->

					</div> <!--end cat 2 div -->

					<div class="section">
						<h2>American Short-Hair</h2>
					
						<div>
							<img src="images/american-shorthair.jpg" alt="American-Shorthair">
						</div>
					
						<div>
							<div class="question">
								<p>
									<span>Are you familiar with this breed?</span>
									<br>
									<input type="radio" name="familiar3" value="Yes">
									Yes
									<br>
									<input type="radio" name="familiar3" value="No">
									No
									<br>
									<input type="radio" name="familiar3" value="Unsure">
									Unsure
								</p>
							</div>

							<div class="question">
								<p>
									<span>What would you do with this cat (select all that apply)</span>
									<br>
									<input type="checkbox" name="do3a" id="do3a" value="Snuggle">
									Snuggle it
									<br>
									<input type="checkbox" name="do3b" id="do3b" value="Pet">
									Pet It
									<br>
									<input type="checkbox" name="do3c" id="do3c" value="Kick">
									Kick It
									<br>
									<input type="checkbox" name="do3d" id="do3d" value="Let Kill">
									Let it Kill Things
								</p>
							</div>

							<div class="question">
								<span>Tell us why you selected the answers above:</span>
								<br>
								<textarea name="why3" id="why3" value="<?php echo $responses["why3"]?>"></textarea>
							</div>
						</div> <!--end cat 3 questions -->
					</div> <!--end cat 3 div -->

					<div class="submit-cont">
						<input type="submit" value="Submit Update">
					</div>

				</form>

	<?php } ?>

		</table>

		<br>
		<a href="delete.html">Delete a Response</a>
		<br>
		<a href="survey.html">Return to Survey</a>
	</div>
</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
