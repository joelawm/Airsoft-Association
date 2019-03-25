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
     <?php include("includes/head.txt"); ?>
</head>
<body>
     <!--Header-->
     <?php include("includes/header.php"); ?>
     <!--Welcome Portion-->
     <div class="container">
          <div class="row row-centered">
              <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
              <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
              <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
              <!-- Rounded switch -->
              <p>Dark Mode</p>
              <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
              </label>
         </div>
      </div>
</body>
</html>
