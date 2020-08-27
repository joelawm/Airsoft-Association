<html>
<head>
     <title>Login</title>
     <?php include("includes/head.txt"); ?>
</head>
<body>
     <?php include("includes/header.php"); ?>
     <div class="login-form">
          <form action="/LoginController.php" method="post">
               <h2 class="text-center">Log in</h2>
               <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email Address">
                    <span class="text-danger"><?php echo $email_err; ?></span>
               </div>
               <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="text-danger"><?php echo $password_err; ?></span>
               </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
               </div>
               <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="Account/passwordreset.php" class="pull-right">Forgot Password?</a>
               </div>
               <p class="text-center" style="padding-top:7px;"><a href="r.php">Create an Account</a></p>
			<span class="text-danger text-center"><?php echo $global_err; ?></span>
          </form>
     </div>
</body>
</html>
