<?php
require 'dbconnect.php';
	echo $user_id=$_SESSION['User_id'];
	
 	if(isset($_REQUEST['update'])){
 		$sl_no=$_REQUEST['sl_no'];
		$examname=$_REQUEST['examname'];
		$subject=$_REQUEST['subject'];
		$yearofpassing=$_REQUEST['yearofpassing'];
		$university=$_REQUEST['university'];
		$markobtain=$_REQUEST['markobtain'];
		$remark=$_REQUEST['remark'];
		$sql1="UPDATE master_details SET year_of_passing='$yearofpassing',Exam='$examname', board='$university', marks='$markobtain', class='$subject', remarks='$remark' where sl_no='$sl_no'";
		mysql_query($sql1) or die(mysql_error());
		header('Location:maintain.php');
	}
?>