<?php  
	require 'dbconnect.php';
	session_destroy();
	header('location:index.php');
?>