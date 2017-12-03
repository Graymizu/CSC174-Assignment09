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

	$id = (int) $_POST['id'];

	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM response09 ";
	$query .= "WHERE id={$id}";


	$result = mysqli_query($connection, $query);
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Responses</title>
	</head>
	<body>
		<?php include "admin-nav.inc" ?>

		<h1>Updating Response ID <?php echo $id?></h1>

		<?php
			// 3. Use returned data (if any)
			while($responses = mysqli_fetch_assoc($result)) {
				// output data from each row
				
			
		?>

			<form method="post" id="form" action="confirm-update.php">
				<h2>Tell Us About Yourself</h2>
				<section>
					<span>ID: </span>
					<input readonly type="text" name="id" id="id" value=<?php echo $response09["id"]?>>
					<span>Your Name:</span>
					<input type="text" name="name" id="name" value="<?php echo $response09["name"]?>">
					<span>Your Email Address:</span>
					<input type="email" name="email" id="email" value="<?php echo $response09["email"]?>">
				</section>
			
				<section> <!--===== User Information =====-->
					<h2>Tell Us About Yourself</h2>
					<div>
						<span>Your Name:</span>
						<input type="text" name="name" id="name" required>
					</div>
					<div>
						<span>Your Email Address:</span>
						<input type="email" name="email" id="email" required>
					</div>
				</section>
			
<!-- Question #1 =================================================================================================-->				


				<section>

					<h2>Siamese</h2>
						
					<figure>
						<img src="images/siamese-cat.jpg" alt="Siamese">
					</figure>

					<p>The sophisticated Siamese looks dressed for an elegant masquerade ball in pale evening wear with chic black accessories and tanzanite-blue eyes. <a href="http://cattime.com/cat-breeds/siamese-cats#/slide/1">Learn more about Siamese cats</a>.</p>
						
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar1" value="Yes">Yes<br>
						<input type="radio" name="familiar1" value="No">No<br>
						<input type="radio" name="familiar1" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do1a" id="do1a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do1b" id="do1b" value="Pet">Pet It<br>
						<input type="checkbox" name="do1c" id="do1c" value="Kick">Kick It<br>
						<input type="checkbox" name="do1d" id="do1d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do1e" id="do1e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do1f" id="do1f" value="Worship It">Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why1" id="why1"></textarea>
					</div>
						
				</section> <!-- end cat 1 -->

<!-- Question #2 =================================================================================================-->				


				<section>

					<h2>Maine Coon</h2>
					
					<figure>
						<img src="images/maine-coon.jpg" alt="Maine-Coon">
					</figure>

					<p>The Maine Coon is a native New Englander, hailing from Maine, where he was a popular mouser, farm cat and, most likely, ship’s cat, at least as far back as the early 19th century. <a href="http://cattime.com/cat-breeds/maine-coon-cats#/slide/1">Learn more about Maine Coon</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar2" value="Yes">Yes<br>
						<input type="radio" name="familiar2" value="No">No<br>
						<input type="radio" name="familiar2" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do2a" id="do2a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do2b" id="do2b" value="Pet">Pet It<br>
						<input type="checkbox" name="do2c" id="do2c" value="Kick">Kick It<br>
						<input type="checkbox" name="do2d" id="do2d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do2e" id="do2e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do2f" id="do2f" value="Worship It">Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why2" id="why2"></textarea>
					</div>

				</section> <!--end cat 2  -->

<!-- Question #3 =================================================================================================-->				


				<section>
					<h2>American Shorthair</h2>
					
					<figure>
						<img src="images/american-shorthair.jpg" alt="American-Shorthair">
					</figure>

					<p>The adaptable and good-natured American Shorthair retains his hunting ability, but these days he is more likely to be a family companion. <a href="http://cattime.com/cat-breeds/american-shorthair#/slide/1">Learn more about American Shorthairs</a>.</p>				
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar3" value="Yes">Yes<br>
						<input type="radio" name="familiar3" value="No">No<br>
						<input type="radio" name="familiar3" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do3a" id="do3a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do3b" id="do3b" value="Pet">Pet It<br>
						<input type="checkbox" name="do3c" id="do3c" value="Kick">Kick It<br>
						<input type="checkbox" name="do3d" id="do3d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do3e" id="do3e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do3f" id="do3f" value="Worship It">Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why3" id="why3"></textarea>
					</div>
				</section> <!--end cat 3 -->

<!-- Question #4 =================================================================================================-->		

				<section>
					<h2>Ragamuffin</h2>
					
					<figure>
						<img src="images/ragamuffin.jpg" alt="Ragamuffin">
					</figure>

					<p>The Ragamuffin is known for his docile nature. He loves to be held like a baby and will completely relax into your arms. <a href="http://cattime.com/cat-breeds/ragamuffin-cats">Learn more about Ragamuffins</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar4" value="Yes">Yes<br>
						<input type="radio" name="familiar4" value="No">No<br>
						<input type="radio" name="familiar4" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do4a" id="do4a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do4b" id="do4b" value="Pet">Pet It<br>
						<input type="checkbox" name="do4c" id="do4c" value="Kick">Kick It<br>
						<input type="checkbox" name="do4d" id="do4d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do4e" id="do4e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do4f" id="do4f" value="Worship It">Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why4" id="why4"></textarea>
					</div>

				</section> <!--end cat 4 -->

<!-- Question #5 =================================================================================================-->	


				<section>
					<h2>Ragdoll</h2>
					
					<figure>
						<img src="images/ragdoll.jpg" alt="Ragdoll">
					</figure>

					<p>With positive reinforcement, Ragdoll cats learn quickly and can pick up tricks as well as good behaviors such as using a scratching post. <a href="http://cattime.com/cat-breeds/ragdoll-cats#/slide/1">Learn more about Ragdolls</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar5" value="Yes">Yes<br>
						<input type="radio" name="familiar5" value="No">No<br>
						<input type="radio" name="familiar5" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do5a" id="do5a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do5b" id="do5b" value="Pet">Pet It<br>
						<input type="checkbox" name="do5c" id="do5c" value="Kick">Kick It<br>
						<input type="checkbox" name="do5d" id="do5d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do5e" id="do5e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do5f" id="do5f" value="Worship It">Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why5" id="why5"></textarea>
					</div>

				</section> <!--end cat 5 -->

<!-- Question #6 =================================================================================================-->

				<section>
					<h2>Bengal</h2>
					
					<figure>
						<img src="images/bengal.jpg" alt="Bengal">
					</figure>

					<p>The Bengal could never be called delicate. It is an athlete: agile and graceful with a strong, muscular body, as befits a cat who looks as if he belongs in the jungle. <a href="http://cattime.com/cat-breeds/bengal-cats">Learn more about Bengals</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="familiar6" value="Yes">Yes<br>
						<input type="radio" name="familiar6" value="No">No<br>
						<input type="radio" name="familiar6" value="Unsure" required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="do6a" id="do6a" value="Snuggle">Snuggle it<br>
						<input type="checkbox" name="do6b" id="do6b" value="Pet">Pet It<br>
						<input type="checkbox" name="do6c" id="do6c" value="Kick">Kick It<br>
						<input type="checkbox" name="do6d" id="do6d" value="Let Kill">Let it Kill Things<br>
						<input type="checkbox" name="do6e" id="do6e" value="Dress It Up">Dress It Up<br>
						<input type="checkbox" name="do6f" id="do6f" value="Worship It">Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="why6" id="why6"></textarea>
					</div>

				</section> <!--end cat 6 -->

<!-- End of Survey Questions =========================================================================-->

				<input type="submit" value="Submit Update">

			</form>

	<?php } ?>

		</table>
		
	</body>
</html>

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>
