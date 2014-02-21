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
	<div class="container"style="margin-top:200px;">
		<div class="btn-group">
      		<a href="mainmenu.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
    	</div>
		<div class="row clearfix">
			<div class="col-md-4 column">
			</div>
			<div class="col-md-4 column">
			<?php	echo'<form action="profileupdate.php" method="POST" role="form" >
					<div class="form-group">
			 			<label for="exampleInputEmail1">Name</label><input type="text" class="form-control" id="exampleInputEmail1" value="'.$rws['name'].'" name="name" placeholder="Name" />
					</div>
					<div class="form-group">
			 			<label for="exampleInputPassword1">Email</label><input type="email" class="form-control" id="exampleInputPassword1" name="email" value="'.$rws['email'].'" placeholder="Email" />
					</div>
					<div class="form-group">
			 			<label for="exampleInputEmail1">Batch</label><input type="text" class="form-control" id="exampleInputEmail1" value="'.$rws['batch'].'" name="batch" placeholder="Batch" />
					</div>
					<div class="form-group">
			 			<label for="exampleInputPassword1">Role</label><input type="text" class="form-control" id="exampleInputPassword1" name="role" value="'.$rws['role'].'" placeholder="Role" />
					</div>
					<div class="form-group">
							<button type="submit" name="Save" class="btn btn-success">Update</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 column">
			</div>
		</div>
	</div>
	';?>
</body>
</html>
