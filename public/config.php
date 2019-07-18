<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
if(!defined('DB_SERVER')) define('DB_SERVER', '127.0.0.1');
if(!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'root');
if(!defined('DB_NAME')) define('DB_NAME', 'NAA');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
