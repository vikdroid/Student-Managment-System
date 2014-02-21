<?php
    require 'dbconnect.php';
    if (isset($_SESSION['User_id'])) {
         header('Location:role.php');
    }
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
					
 					<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg1">Free Register </button>  
					
				</div>
			</div>
		</div>
	</div>
<div class="container" style="margin-top:200px;">
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
					<form action="login.php" method="POST" role="form" >
							<div class="form-group">
					 			<label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email Id" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" />
							</div>
							
							<div class="form-group">
								<button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Login</button>
							</div>
						</form>
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
     		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h4 class="modal-title" style="margin-left:20px" id="myModalLabel">Free Register</h4>
      		</div>
      		<div class="modal-body">
      			<div id="error">
      			<!-- <div class="alert alert-danger alert-dismissable">  
  					<a class="close" data-dismiss="alert">×</a>  
  					<strong>Error!</strong>This is a fatal error.  
				</div>
 -->			</div>  
      			<div class="row clearfix">
					<div class="col-md-12 column">
						<form role="form" action="register.php" method="post">
							<div class="form-group">
					 			<label for="name">Name</label>
					 			<input type="text" class="form-control" name="name" placeholder="Name" id="name" />
							</div>
							<div class="form-group">
					 			<label for="email">Email Id</label>
					 			<input type="email" class="form-control" name="email" placeholder="Email Id" id="email" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputEmail1">Password</label>
					 			<input type="password" class="form-control" name="password" placeholder="Password" id="password" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputPassword1">Batch</label>
					 			<input type="text" class="form-control" name="batch" placeholder="Batch" id="batch" />
							</div>
							<div class="form-group">
								<button type="submit" name="register" class="btn btn-primary btn-lg btn-block" onclick="return validate();">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
