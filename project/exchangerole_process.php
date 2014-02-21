<?php
	require 'dbconnect.php';
	$roll = $_POST['roleno'];
	$_SESSION['Roleno'] = $roll;
	if(isset($_REQUEST['insertok'])){
		if(isset($_POST['selectrole_to'])){
			$role = $_POST['selectrole_to'];
		
		/*print_r($role);*/
		for($i = 0; $i < count($role); $i++){
			/*print_r($role);*/
			$roleGroup = mysql_query("UPDATE user_role SET role_id='$role[$i]' WHERE user_id='$roll'");

		}
	}
	}
	header('Location:exchangerole.php');
?>