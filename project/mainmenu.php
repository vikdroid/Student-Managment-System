<?php
    require 'dbconnect.php';
   if(!isset($_SESSION['User_id'])){
header('Location:index.php');
}
?>
<?php
	require 'dbconnect.php';
	$user_id=$_SESSION['User_id'];
	$sql="SELECT * FROM user WHERE user_id='$user_id'";
	$rws = mysql_fetch_array(mysql_query($sql));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  	<title>Project Lab</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="topNav">
			<div class="container">
				<div class="alignR">
					<div class="pull-left socialNw">
						<button class="btn btn-primary" class="active">Project Lab</button> 
					</div>
 					Id: <?php echo $rws['user_id'];?> |
					Name: <?php echo $rws['name']; ?> |
					Role: <?php echo $rws['role']; ?> |
					<a href="logout.php" >Logout</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top:200px;">
		<div class="row clearfix">
			<div class="col-md-4 column">
			</div>
			<div class="col-md-4 column">
				<a href="mainmenu.php"><button type="button" class="btn btn-lg btn-primary btn-block">mainmenu</button></a><br>
			  	<a href="maintainprofile.php"><button type="button" class="btn btn-lg btn-primary btn-block">Maintain Profile</button></a><br>
			  	<a href="maintain.php"><button type="button" class="btn btn-lg btn-primary btn-block">Maintain</button></a><br>
			  	<a href="exchangerole.php"><button type="button" class="btn btn-lg btn-primary btn-block">Exchange Role</button></a><br>
			  	<a href="masterdetail.php"><button type="button" class="btn btn-lg btn-primary btn-block">Master Detail</button></a>
			</div>
			<div class="col-md-4 column">
			</div>
		</div>
	</div>
</body>
</html>
