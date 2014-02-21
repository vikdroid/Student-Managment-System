<?php
    require 'dbconnect.php';
   	if(!isset($_SESSION['User_id'])){
	header('Location:index.php');
	}
	else{

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
    <script type="text/javascript" src="js/script.js"></script>
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
	<div id="error">

	</div>
		<div class="row clearfix">
			<div class="col-md-4 column">
			</div> 
			<div class="col-md-4 column">
				<form action="roleselect.php" method="post">
					<select class="form-control" name="selectrole" id="selectrole">
   						<option value="">Select role</option>
	      				<option value="HOD">HOD</option>
    	  				<option value="faculty">Faculty</option>
      					<option value="princple">Principle</option>
      					<option value="student">Student</option>
					</select>
			</div>
			<div class="col-md-4 column">
				<button type="submit" name="addrole" class="btn btn-primary btn-lng" onclick="return validaterole();">OK</button>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
</body>
</html>