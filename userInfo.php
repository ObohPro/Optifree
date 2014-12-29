<?php 
	include_once('db.php');
	
	$email = $_POST['loginName'];
	$password = $_POST['password'];
	
	if(mysql_query("INSERT INTO user VALUES('$email', '@password')"))
		echo "Login successful - your cape should appear within the next 24 hours.";
	else
		echo "Could not connect to servers."
?>]
