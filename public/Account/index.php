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
			<div class="sidebar">
			  <nav class="sidebar-nav">
			    <ul class="nav">
			      <li class="nav-title">Nav Title</li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">
			          <i class="nav-icon cui-speedometer"></i> Nav item
			        </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">
			          <i class="nav-icon cui-speedometer"></i> With badge
			          <span class="badge badge-primary">NEW</span>
			        </a>
			      </li>
			      <li class="nav-item nav-dropdown">
			        <a class="nav-link nav-dropdown-toggle" href="#">
			          <i class="nav-icon cui-puzzle"></i> Nav dropdown
			        </a>
			        <ul class="nav-dropdown-items">
			          <li class="nav-item">
			            <a class="nav-link" href="#">
			              <i class="nav-icon cui-puzzle"></i> Nav dropdown item
			            </a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="#">
			              <i class="nav-icon cui-puzzle"></i> Nav dropdown item
			            </a>
			          </li>
			        </ul>
			      </li>
			      <li class="nav-item mt-auto">
			        <a class="nav-link nav-link-success" href="https://coreui.io">
			          <i class="nav-icon cui-cloud-download"></i> Download CoreUI</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link nav-link-danger" href="https://coreui.io/pro/">
			          <i class="nav-icon cui-layers"></i> Try CoreUI
			          <strong>PRO</strong>
			        </a>
			      </li>
			    </ul>
			  </nav>
			  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
			</div>
         <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
         <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
         <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
	    <form action="/uploadeimage.php">
		    <input type="file" name="pic" accept="image/png, image/jpeg">
		    <input type="submit">
		</form>
         <!-- Rounded switch -->
         <p>Dark Mode</p>
         <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
         </label>
      </div>
</body>
</html>
