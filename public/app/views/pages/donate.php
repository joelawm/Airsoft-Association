<html>
<head>
     <title>Donate</title>
     <?php include("includes/head.txt"); ?>
</head>
<body>
     <?php include("includes/header.php"); ?>
     <div class="login-form">
         <h2 class="text-center">Donate</h2>
         <p class="text-center">Please enter the amount you want to donate.</p>
         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                 <input type="text" placeholder="$1.00" name="username" class="form-control" value="<?php echo $username; ?>">
                 <span class="help-block"><?php echo $username_err; ?></span>
             </div>
             <div class="form-group">
                 <input type="submit" class="btn btn-primary btn-block" value="Donate">
             </div>
             <div class="row row-centered"><a href="/passwordreset.php">What do the doantions go to?</a></div>
         </form>
     </div>
</body>
</html>
