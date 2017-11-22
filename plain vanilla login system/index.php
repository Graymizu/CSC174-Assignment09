<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="main-menu">
        <ul>
            <li><a class="active btn btn-primary" href="welcome.php">Welcome page</a></li>
            <li><a class="btn btn-primary" href="another-page.php">Another page</a></li>
        </ul>
    </nav>

    <nav class="user-menu">
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </nav>

    <div class="page-header">
        <h1>Hi, <strong><?php echo $_SESSION['username']; ?></strong>. Welcome to our site.</h1>
    </div>
    <p>Lorem ipsum dolor sit amet</p>
</body>
</html>