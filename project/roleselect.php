<?php
	require 'dbconnect.php';
	if(isset($_REQUEST['addrole']))
	{
		$user_id=$_SESSION['User_id'];
		$selectrole = $_REQUEST['selectrole'];
		$sql = "UPDATE user SET role = '$selectrole' WHERE user_id ='$user_id'";
		mysql_query($sql) or die('Database Error');
		header('location:mainmenu.php');
	}
	
?>