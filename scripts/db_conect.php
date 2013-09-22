<?php
	//Connecting to database
	$connection=mysql_connect(SERVER, USER, PASSWORD);
	if($connection == 0)
	{
		die("Failed to connect to the datatbse. The error was " . mysql_error());
	}
		
	//Select Database
	$db= mysql_select_db(DB_NAME) or die(mysql_error());
		
?>