<?php

//Database class for the entire application
class DB
{
	function __construct()
	{
        $maintenance = false;
    }

    public static function connToDB()
    {
	    /* Database credentials. Assuming you are running MySQL server with default setting (user 'root' with no password) */
	    if(!defined('DB_SERVER')) define('DB_SERVER', '127.0.0.1');
	    if(!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
	    if(!defined('DB_PASSWORD')) define('DB_PASSWORD', 'root');
	    if(!defined('DB_NAME')) define('DB_NAME', 'NAA');

	    /* Attempt to connect to MySQL database */
	    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
	    /*if(!$link)
	    {
		    $server_error = 'Server error. Please try again sometime. CON';
		    header( "Location: /sitedown.php" );
		    exit ;
	    }*/

	    $select_db = mysqli_select_db($link,DB_NAME);
	    /*if(!$select_db)
	    {
		    $server_error = 'Server error. Please try again sometime. DB';
		    header( "Location: /sitedown.php" );
		    exit ;
	    }*/
    }
}
?>
