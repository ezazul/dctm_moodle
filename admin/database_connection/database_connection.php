<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "dctm";
	$conn = mysqli_connect($server, $user, $pass, $db);
	if(!$conn){
		echo mysqli_error($conn);
		die("Connection failed to the database");
	}
?>