<?php

# dbconnect_pdo.php: this file contains the function that will be commonly used by php files to access connection details to dbprode

# function dbprode_connect() contains the password and username that is used to connect to the database so keep it private access

# Use the function dbprode_connect() as follows: $conn_param = dbprode_connect();


function dbprode_connect()
{

	$dbconn = new PDO('mysql:host=HOSTNAME; port=13308; dbname=db_1', 'username', 'password');
	$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return($dbconn);
}

?>
