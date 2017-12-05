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
	
	$checked = "checked";

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
					<input readonly type="text" name="id" id="id" value=
					<?php echo $responses["id"]?>>
					<span>First Name:</span>
					<input type= "text" name="fname" id="fname" value=
					<?php echo $responses["fname"]?>>
					<span>Last Name:</span>
					<input type="text" name="lname" id="lname" value=
					<?php echo $responses["lname"]?>>
					<span>Your Email Address:</span>
					<input type="email" name="email" id="email" value=
					<?php echo $responses["email"]?>>
				</section>

			
<!-- Question #1 =================================================================================================-->				

				
				<section>
					<h2>American Shorthair</h2>
					
					<figure>
						<img src="images/american-shorthair.jpg" alt="American-Shorthair">
					</figure>

					<p>The adaptable and good-natured American Shorthair retains his hunting ability, but these days he is more likely to be a family companion. <a href="http://cattime.com/cat-breeds/american-shorthair#/slide/1">Learn more about American Shorthairs</a>.</p>				
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="american1" value="Yes" <?php echo ($responses['american1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="american1" value="No"<?php echo ($responses['american1'] != "" ? "checked" : ""); ?>>No <br>
						<input type="radio" name="american1" value="Unsure" <?php echo ($responses['american1'] != "" ? "checked" : ""); ?> required> Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="american2a" id="american2a" value="Snuggle" <?php echo ($responses['american2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="american2b" id="american2b" value="Pet" <?php echo ($responses['american2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="american2c" id="american2c" value="Kick" <?php echo ($responses['american2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="american2d" id="ameircan2d" value="Let Kill" <?php echo ($responses['american2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="american2e" id="american2e" value="Dress It Up" <?php echo ($responses['american2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="american2f" id="american2f" value="Worship It" <?php echo ($responses['american2f'] != "" ? "checked" : ""); ?>>Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="american3" id="american3" value= <?php echo $responses["american3"]?>></textarea>
					</div>
				</section>

				 <!-- end cat 1 -->

<!-- Question #2 =================================================================================================-->				

				<section>
					<h2>Bengal</h2>
					
					<figure>
						<img src="images/bengal.jpg" alt="Bengal">
					</figure>

					<p>The Bengal could never be called delicate. It is an athlete: agile and graceful with a strong, muscular body, as befits a cat who looks as if he belongs in the jungle. <a href="http://cattime.com/cat-breeds/bengal-cats">Learn more about Bengals</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="bengal1" value="Yes" <?php echo ($responses['bengal1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="bengal1" value="No" <?php echo ($responses['bengal1'] != "" ? "checked" : ""); ?>>No<br>
						<input type="radio" name="bengal1" value="Unsure" <?php echo ($responses['bengal1'] != "" ? "checked" : ""); ?> required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>


						<input type="checkbox" name="bengal2a" id="bengal2a" value="Snuggle" <?php echo ($responses['bengal2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="bengal2b" id="bengal2b" value="Pet" <?php echo ($responses['bengal2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="bengal2c" id="bengal2c" value="Kick" <?php echo ($responses['bengal2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="bengal2d" id="bengal2d" value="Let Kill" <?php echo ($responses['bengal2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="bengal2e" id="bengal2e" value="Dress It Up" <?php echo ($responses['bengal2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="bengal2f" id="bengal2f" value="Worship It" <?php echo ($responses['bengal2f'] != "" ? "checked" : ""); ?>>Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="bengal3" id="bengal3" value= <?php echo $responses["bengal3"]?>></textarea>
					</div>

				</section>
				 <!--end cat 2  -->

<!-- Question #3 =================================================================================================-->						


					<section>

					<h2>Maine Coon</h2>
					
					<figure>
						<img src="images/maine-coon.jpg" alt="Maine-Coon">
					</figure>

					<p>The Maine Coon is a native New Englander, hailing from Maine, where he was a popular mouser, farm cat and, most likely, ship’s cat, at least as far back as the early 19th century. <a href="http://cattime.com/cat-breeds/maine-coon-cats#/slide/1">Learn more about Maine Coon</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="maine1" value="Yes" <?php echo ($responses['maine1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="maine1" value="No" <?php echo ($responses['maine1'] != "" ? "checked" : ""); ?>>No<br>
						<input type="radio" name="maine1" value="Unsure" <?php echo ($responses['maine1'] != "" ? "checked" : ""); ?> required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="maine2a" id="maine2a" value="Snuggle" <?php echo ($responses['maine2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="maine2b" id="maine2b" value="Pet" <?php echo ($responses['maine2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="maine2c" id="maine2c" value="Kick" <?php echo ($responses['maine2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="maine2d" id="maine2d" value="Let Kill" <?php echo ($responses['maine2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="maine2e" id="maine2e" value="Dress It Up" <?php echo ($responses['maine2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="maine2f" id="maine2f" value="Worship It" <?php echo ($responses['maine2f'] != "" ? "checked" : ""); ?>>Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="maine3" id="maine3" value= <?php echo $responses["maine3"]?>></textarea>
					</div>

				</section>

 <!--end cat 3 -->

<!-- Question #4 =================================================================================================-->		

				<section>
					<h2>Ragamuffin</h2>
					
					<figure>
						<img src="images/ragamuffin.jpg" alt="Ragamuffin">
					</figure>

					<p>The Ragamuffin is known for his docile nature. He loves to be held like a baby and will completely relax into your arms. <a href="http://cattime.com/cat-breeds/ragamuffin-cats">Learn more about Ragamuffins</a>.</p>
					
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="ragamuffin1" value="Yes" <?php echo ($responses['ragamuffin1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="ragamuffin1" value="No" <?php echo ($responses['ragamuffin1'] != "" ? "checked" : ""); ?>>No<br>
						<input type="radio" name="ragamuffin1" value="Unsure" <?php echo ($responses['ragamuffin1'] != "" ? "checked" : ""); ?> required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="ragamuffin2a" id="ragamuffin2a" value="Snuggle" <?php echo ($responses['ragamuffin2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="ragamuffin2b" id="ragamuffin2b" value="Pet" <?php echo ($responses['ragamuffin2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="ragamuffin2c" id="ragamuffin2c" value="Kick" <?php echo ($responses['ragamuffin2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="ragamuffin2d" id="ragamuffin2d" value="Let Kill" <?php echo ($responses['ragamuffin2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="ragamuffin2e" id="ragamuffin2e" value="Dress It Up" <?php echo ($responses['ragamuffin2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="ragamuffin2f" id="ragamuffin2f" value="Worship It" <?php echo ($responses['ragamuffin2f'] != "" ? "checked" : ""); ?>>Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="ragamuffin3" id="ragamuffin3" value= <?php echo $responses["ragamuffin3"]?>></textarea>
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

						<input type="radio" name="ragdoll1" value="Yes" <?php echo ($responses['ragdoll1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="ragdoll1" value="No" <?php echo ($responses['ragdoll1'] != "" ? "checked" : ""); ?>>No<br>
						<input type="radio" name="ragdoll1" value="Unsure" <?php echo ($responses['ragdoll1'] != "" ? "checked" : ""); ?> required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="ragdoll2a" id="ragdoll2a" value="Snuggle" <?php echo ($responses['ragdoll2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="ragdoll2b" id="ragdoll2b" value="Pet" <?php echo ($responses['ragdoll2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="ragdoll2c" id="ragdoll2c" value="Kick" <?php echo ($responses['ragdoll2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="ragdoll2d" id="ragdoll2d" value="Let Kill" <?php echo ($responses['ragdoll2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="ragdoll2e" id="ragdoll2e" value="Dress It Up" <?php echo ($responses['ragdoll2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="ragdoll2f" id="ragdoll2f" value="Worship It" <?php echo ($responses['ragdoll2f'] != "" ? "checked" : ""); ?>>Worship It
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="ragdoll3" id="ragdoll3" value= <?php echo $responses["ragdoll3"]?>></textarea>
					</div>

				</section> <!--end cat 5 -->

<!-- Question #6 =================================================================================================-->

				<section>

					<h2>Siamese</h2>
						
					<figure>
						<img src="images/siamese-cat.jpg" alt="Siamese">
					</figure>

					<p>The sophisticated Siamese looks dressed for an elegant masquerade ball in pale evening wear with chic black accessories and tanzanite-blue eyes. <a href="http://cattime.com/cat-breeds/siamese-cats#/slide/1">Learn more about Siamese cats</a>.</p>
						
					<div>
						<span>Are you familiar with this breed?</span><br>

						<input type="radio" name="siamese1" value="Yes" <?php echo ($responses['siamese1'] != "" ? "checked" : ""); ?>>Yes<br>
						<input type="radio" name="siamese1" value="No" <?php echo ($responses['siamese1'] != "" ? "checked" : ""); ?>>No<br>
						<input type="radio" name="siamese1" value="Unsure" <?php echo ($responses['siamese1'] != "" ? "checked" : ""); ?> required>Unsure
					</div>

					<div>
						<span>What would you do with this cat (select all that apply)</span><br>

						<input type="checkbox" name="siamese2a" id="siamese2a" value="Snuggle" <?php echo ($responses['siamese2a'] != "" ? "checked" : ""); ?>>Snuggle it<br>
						<input type="checkbox" name="siamese2b" id="siamese2b" value="Pet" <?php echo ($responses['siamese2b'] != "" ? "checked" : ""); ?>>Pet It<br>
						<input type="checkbox" name="siamese2c" id="siamese2c" value="Kick" <?php echo ($responses['siamese2c'] != "" ? "checked" : ""); ?>>Kick It<br>
						<input type="checkbox" name="siamese2d" id="siamese2d" value="Let Kill" <?php echo ($responses['siamese2d'] != "" ? "checked" : ""); ?>>Let it Kill Things<br>
						<input type="checkbox" name="siamese2e" id="siamese2e" value="Dress It Up" <?php echo ($responses['siamese2e'] != "" ? "checked" : ""); ?>>Dress It Up<br>
						<input type="checkbox" name="siamese2f" id="siamese2f" value="Worship It" <?php echo ($responses['siamese2f'] != "" ? "checked" : ""); ?>>Worship It<br>
					</div>

					<div>
						<span>Tell us why you selected the answers above:</span><br>
						<textarea name="siamese3" id="siamese3" value= <?php echo $responses["siamese3"]?>></textarea>
					</div>
						
				</section>

				 <!--end cat 6 -->

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
