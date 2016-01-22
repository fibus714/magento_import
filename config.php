<?php
	$db = new mysqli('127.0.0.1', 'DBusername', 'dbpassword', 'db');

	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
?>
