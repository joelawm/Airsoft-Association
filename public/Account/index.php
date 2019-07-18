<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
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
		<div class="wrapper">
		    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

		    <!--

		        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
		        Tip 2: you can also add an image using data-image tag

		    -->

		    	<div class="sidebar-wrapper">
		            <div class="logo">
		                <a href="http://www.creative-tim.com" class="simple-text">
		                    Creative Tim
		                </a>
		            </div>

		            <ul class="nav">
		                <li class="active">
		                    <a href="dashboard.html">
		                        <i class="pe-7s-graph"></i>
		                        <p>Dashboard</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="user.html">
		                        <i class="pe-7s-user"></i>
		                        <p>User Profile</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="table.html">
		                        <i class="pe-7s-note2"></i>
		                        <p>Table List</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="typography.html">
		                        <i class="pe-7s-news-paper"></i>
		                        <p>Typography</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="icons.html">
		                        <i class="pe-7s-science"></i>
		                        <p>Icons</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="maps.html">
		                        <i class="pe-7s-map-marker"></i>
		                        <p>Maps</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="notifications.html">
		                        <i class="pe-7s-bell"></i>
		                        <p>Notifications</p>
		                    </a>
		                </li>
						<li class="active-pro">
		                    <a href="upgrade.html">
		                        <i class="pe-7s-rocket"></i>
		                        <p>Upgrade to PRO</p>
		                    </a>
		                </li>
		            </ul>
		    	</div>
		    </div>
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
</body>
</html>
