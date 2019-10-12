<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
{
    header("location: login.php");
    exit;
}

$temp = $_FILES['upload']['name'];
$type = $_FILES['upload']['type'];

//This should be the directory for the profiles to upload to
if(($type=="image/jpeg")||($type=="image/jpeg")||($type=="image/png"))
{
	$directory = "./profiles/$username/images/";
	mkdir($directory, 0777);
}
else
{
	echo "Please upload a PNG, or jpeg/jpg!";
}
?>
