<?php 
	session_start();
	error_reporting(0);
	$servername="localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="Project";

	mysql_connect($servername,$dbusername,$dbpassword) or die('database Connection Issue');
	mysql_select_db($dbname);
 ?>
