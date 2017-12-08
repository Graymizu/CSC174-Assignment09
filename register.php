<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $admincode = $newcode = "";
$username_err = $password_err = $confirm_password_err = $email_err = $admincode_err = $newcode_err= "";
$subject = "CSC174 Assignment09 Bronx Cat Survey";
$message = "";
$emailFrom = "mizukage64@gmail.com";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have at least 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter a VALAD email address";
    }else{
        $email = trim($_POST["email"]);
    }

    // Validate admin code
    if(empty(trim($_POST["admincode"]))){
        $admincode_err = "Please enter the code (Try: 1234)";
    }elseif (trim($_POST["admincode"]) != 1234) {
        $admincode_err = "YOU ARE NOT ADMIN APPROVED AND YOU SHOULD FEEL BAD ABOUT IT!";
    }else{
        $admincode = trim($_POST["admincode"]);
    }

    // Validate new code
    if (empty(trim($_POST["newcode"]))) {
        $newcode_err = "null";
    }elseif (strlen(trim($_POST["newcode"])) > 11) {
        $newcode_err = "The code can't be longer the 11 characters long.";
    }else{
            $newcode = trim($_POST["newcode"]);
    }

}  
    
    // Check input errors before inserting in database
    // For changing the admin code
    if(!empty($username) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($admincode_err) && empty($newcode_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, admincode, email) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssis", $param_username, $param_password, $param_newcode, $param_email);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_admincode = $admincode;
            $param_newcode = $newcode;
            $param_email = $email;
            $message = "Hello ".$username.",\n\n    Thank you for signing up to be a new administrater on our website. \nYou admin code that you will need to login will be ".$newcode.".\n\nHappy Editing!\n\nThe Bronx";

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Sending email that contains admin code information
                mail($email, $subject, $message, "From: <$emailFrom");
                // Redirect to login page
                session_start();
                $_SESSION['username'] = $username;      
                header("location: response-table.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);

        // No new code given
    }elseif (!empty($username) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($admincode_err) && $newcode_err == "null") {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $email);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_admincode = $admincode;
            $param_email = $email;
            $message = "Hello ".$username.",\n\n    Thank you for signing up to be a new administrater on our website. \nYou admin code that you will need to login will be ".$admincode.".\n\nHappy Editing!\n\nThe Bronx";
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Sending email that contains admin code information
                mail($email, $subject, $message, "From: <$emailFrom");
                // Redirect to login page
                session_start();
                $_SESSION['username'] = $username;      
                header("location: response-table.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/boxes.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
    
    <div class=" boxlogin container login2">
  
    <div class="opaque2">
        <h2>Sign Up</h2>
        <p>Sign up for administrative privileges.</p>
        <p>(For Administrative Users Only)</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password:<sup>*</sup></label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password:<sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($admincode_err)) ? 'has-error' : ''; ?>">
                <label>Admin Code:<sup>*</sup></label>
                <input type="password" name="admincode" class="form-control" value="<?php echo $admincode; ?>">
                <span  class="help-block"><?php echo $admincode_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email:<sup>*</sup></label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>

            <div class="form-group">
                <label>Set Personal Admin Code: <sup>optional</sup></label>
                <input type="number" name="newcode" class="form-control" value="<?php echo $newcode; ?>">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>  
    </div>  
</body>
</html>
