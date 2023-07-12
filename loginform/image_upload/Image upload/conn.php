<?php
	$conn = mysqli_connect("localhost:3307", "root", "", "test_db");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>