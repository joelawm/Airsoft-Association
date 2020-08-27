<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<html>
<head>
	<title>Account</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <!--Header-->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <!--Welcome Portion-->
     <div class="container">
         <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
         <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
         <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	    <form action="/uploadeimage.php">
		    <input type="file" name="pic" accept="image/png, image/jpeg">
		    <input type="submit">
		</form>
         <!-- Rounded switch -->
         <!--<p>Dark Mode</p>
         <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
         </label>-->
      </div>
</body>
</html>
