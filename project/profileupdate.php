<?php
	require 'dbconnect.php';
	$user_id=$_SESSION['User_id'];
	if(isset($_REQUEST['Save'])) {
		$name = mysql_escape_string($_REQUEST['name']);
		$email = mysql_escape_string($_REQUEST['email']);
		$batch = mysql_escape_string($_REQUEST['batch']);
		$role = mysql_escape_string($_REQUEST['role']);
		$sql = "UPDATE user SET name='$name', email='$email', batch='$batch',role='$role' WHERE user_id='$user_id'";
		mysql_query($sql) or die(mysql_error()); 
		echo "hello";
		header('location:mainmenu.php');
	}
?>