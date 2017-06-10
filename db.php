<?php

	$conn = mysqli_connect("localhost", "root", "", "loginform"); // Connects to the database
	
	/*
	Made an error handler that reports if there is a problem with the connection to the database.
	*/
	if (!$conn) {                                
		die("Connection failed: ". mysqli_connect_error());
	} 

?>