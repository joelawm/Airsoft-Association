<?php
// Include config file
require_once "config.php";

//Intialize these variables to be empty
$username = $password = $confirm_password = $email = $firstname = $lastname = "";
$username_err = $password_err = $confirm_password_err = $email_err = $firstname_err = $lastname_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
     /*
     Username Section
     */
     // Validate username
     if(empty(trim($_POST["username"])))
     {
          $username_err = "Please enter a username.";
     }

     //Username has been entered correctly
     else
     {
          // Prepare a select statement
          $sql = "SELECT id FROM users WHERE username = ?";

          if($stmt = mysqli_prepare($link, $sql))
          {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_username);

               // Set parameters
               $param_username = trim($_POST["username"]);

               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt))
               {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                         $username_err = "This username is already taken.";
                    }
                    else
                    {
                         $username = trim($_POST["username"]);
                    }
               }
               else
               {
                    echo "Oops! Something went wrong. Please try again later.";
               }
          }
          // Close statement
          mysqli_stmt_close($stmt);
     }
     /*
     email Section
     */
     // Validate email
     if(empty(trim($_POST["email"])))
     {
          $email_err = "Please enter a email address.";
     }

     //email has been entered correctly
     else
     {
          // Prepare a select statement
          $sql = "SELECT id FROM users WHERE email = ?";

          if($stmt = mysqli_prepare($link, $sql))
          {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_email);

               // Set parameters
               $param_email = trim($_POST["email"]);

               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt))
               {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1)
                    {
                         $email_err = "This email address is already taken.";
                    }
                    else
                    {
                         $email = trim($_POST["email"]);
                    }
               }
               else
               {
                    echo "Oops! Something went wrong. Please try again later.";
               }
          }
          // Close statement
          mysqli_stmt_close($stmt);
     }
     /*
     First name Section
     */
     // Validate firstname
     if(empty(trim($_POST["firstname"])))
     {
          $firstname_err = "Please enter a first name.";
     }

     //firstname has been entered correctly
     else
     {
          // Prepare a select statement
          $sql = "SELECT id FROM users WHERE firstname = ?";

          if($stmt = mysqli_prepare($link, $sql))
          {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_firstname);

               // Set parameters
               $param_firstname = trim($_POST["firstname"]);

               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt))
               {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $firstname = trim($_POST["firstname"]);
               }
               else
               {
                    echo "Oops! Something went wrong. Please try again later.";
               }
          }
          // Close statement
          mysqli_stmt_close($stmt);
     }
     /*
     Last Name Section
     */
     // Validate lastname
     if(empty(trim($_POST["lastname"])))
     {
          $lastname_err = "Please enter a first name.";
     }

     //firstname has been entered correctly
     else
     {
          // Prepare a select statement
          $sql = "SELECT id FROM users WHERE lastname = ?";

          if($stmt = mysqli_prepare($link, $sql))
          {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_lastname);

               // Set parameters
               $param_lastname = trim($_POST["lastname"]);

               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt))
               {
                    /* store result */
                    mysqli_stmt_store_result($stmt);
                    $lastname = trim($_POST["lastname"]);
               }
               else
               {
                    echo "Oops! Something went wrong. Please try again later.";
               }
          }
          // Close statement
          mysqli_stmt_close($stmt);
     }
     /*
     Password Section
     */
     // Validate password
     if(empty(trim($_POST["password"])))
     {
          $password_err = "Please enter a password.";
     }
     elseif(strlen(trim($_POST["password"])) < 6)
     {
          $password_err = "Password must have atleast 6 characters.";
     }
     else
     {
          $password = trim($_POST["password"]);
     }
     // Validate confirm password
     if(empty(trim($_POST["confirm_password"])))
     {
          $confirm_password_err = "Please confirm password.";
     }
     else
     {
          $confirm_password = trim($_POST["confirm_password"]);
          if(empty($password_err) && ($password != $confirm_password))
          {
               $confirm_password_err = "Password did not match.";
          }
     }

     /*
     Database section
     */
     // Check input errors before inserting in database
     if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($firstname_err) && empty($lastname_err))
     {
          // Prepare an insert statement
          $sql = "INSERT INTO users (username, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)";
          if($stmt = mysqli_prepare($link, $sql))
          {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
               // Set parameters
               $param_username = $username;
               $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
               // Attempt to execute the prepared statement
               if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: login.php");
               }
               else
               {
                    echo "Something went wrong. Please try again later.";
               }
          }
          // Close statement
          mysqli_stmt_close($stmt);
     }

     /*
     close the connection
     */
     mysqli_close($link);
}
?>
<html>
<head>
     <title>Sign Up</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="main">
          <div class="wrapper">
               <h2>Sign Up</h2>
               <p>Please fill this form to create an account.</p>
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!--Username-->
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                         <label>Username</label>
                         <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                         <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <!--Email-->
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                         <label>Email</label>
                         <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                         <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                    <!--First Name-->
                    <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                         <label>First Name</label>
                         <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                         <span class="help-block"><?php echo $firstname_err; ?></span>
                    </div>
                    <!--Last Name-->
                    <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                         <label>Last Name</label>
                         <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                         <span class="help-block"><?php echo $lastname_err; ?></span>
                    </div>
                    <!--Password-->
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                         <label>Password</label>
                         <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                         <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <!--Confirm Password-->
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                         <label>Confirm Password</label>
                         <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                         <span class="help-block"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <!--Submit Buttons-->
                    <div class="form-group">
                         <input type="submit" class="btn btn-primary" value="Create Account">
                    </div>
                    <p>Already have an account? <a href="/login.php">Login here</a>.</p>
                    <a href="/passwordreset.php">Forgot Password?</a>
               </form>
          </div>
     </div>
</body>
</html>
