<?php 
	require 'dbconnect.php';
	if (isset($_REQUEST['login'])) {
		# code...
		$email=mysql_real_escape_string($_REQUEST['email']);
		$pass=sha1(mysql_real_escape_string($_REQUEST['pass']));
		$sql="SELECT user_id, email, pass1 FROM user WHERE email='$email' AND pass1='$pass'";
		$result=mysql_query($sql);
		$rws=mysql_fetch_array($result);
		if($email==$rws['email']  && $pass==$rws['pass1']){
			$_SESSION['User_id']=$rws['user_id'];
				header('Location:role.php');
		}
			else 
			{
				header('location:index.php?id=1');
			}
	}
 ?>