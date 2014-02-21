<?php
	require 'dbconnect.php';
	if(isset($_REQUEST['rollsubmit'])){
		$roll = $_POST['roll'];
		/*echo $roll;
		exit();*/
	}
	/*$sql = "SELECT * FROM master_detail WHERE user_id='$roll'";*/
	$_SESSION['roll'] = $roll;
	header('Location:masterdetail.php');
?>
