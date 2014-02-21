<?php
	require 'dbconnect.php';
	$user_id=$_SESSION['User_id'];

	if(isset($_REQUEST['add']))
	{
		$examname=mysql_escape_string($_REQUEST['examname']);
		$subject=mysql_escape_string($_REQUEST['subject']);
		$yearofpassing=mysql_escape_string($_REQUEST['yearofpassing']);
		$university=mysql_escape_string($_REQUEST['university']);
		$markobtain=mysql_escape_string($_REQUEST['markobtain']);
		$remark=mysql_escape_string($_REQUEST['remark']);
		$sql = "INSERT INTO master_details VALUES('', '$user_id', '$yearofpassing', '$examname', '$university', '$markobtain', '$subject', '$remark')";
		mysql_query($sql) or die('Database Error');
		header('location:maintain.php');
	}
?>