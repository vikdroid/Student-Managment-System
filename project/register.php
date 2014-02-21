<?php 
	require 'dbconnect.php';
	if(isset($_REQUEST['register']))
	{
		$name=mysql_escape_string($_REQUEST['name']);
		$email=mysql_escape_string($_REQUEST['email']);
		$pass=mysql_escape_string($_REQUEST['password']);
		$batch=mysql_escape_string($_REQUEST['batch']);

		$checkmail = mysql_query("SELECT email FROM user WHERE email='$email'");
		$checkemail = mysql_num_rows($checkmail);

		if ($checkemail>0) {
			# code...
			header('location:index.php?id=2');
		}

		else
		{
			$sql = "INSERT INTO user VALUES('', '$name', '$email', SHA1('$pass'), '$batch', NOW(), '')";
			mysql_query($sql) or die('Database Error');
			header('location:index.php?id=1');
		}
	}
 ?>