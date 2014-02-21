<?php
	if(isset($_REQUEST['rolesubmit'])){
		$roleno = mysql_real_escape_string($_REQUEST['roleno']);
		echo $roleno;
		$sql = "SELECT role_id FROM user_role WHERE user_id='$roleno'";
		session_start();
		$_SESSION['Roleno'] = $roleno;
		header('Location:exchangerole.php');
	}