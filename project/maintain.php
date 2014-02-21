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
  $query="SELECT * FROM master_details WHERE user_id='$user_id'";
  $result=mysql_query($query);
  $num=mysql_num_rows($result);
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
		<div class="row clearfix">
			<div class="col-md-4 column">
				<div class="btn-group">
					<a href="mainmenu.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
				</div>
			</div>
			<div class="col-md-4 column">					
									<div class="btn-group">
									<button class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">ADD</button>  
									</div>
  									<div class="btn-group" style="margin-left:10px;">
								<form action="update.php" method="post">
									<button id="update" name="action1" type="submit" class="btn btn-success" value="update">Update</button>  
									</div>
  									<div class="btn-group" style="margin-left:10px;">
									<button id="view" name="action1" type="submit" class="btn btn-success" value="view">View</button>  
									</div>
  									<div class="btn-group" style="margin-left:10px;">
        							<button id="delete" name="action1" type="submit" class="btn btn-success" value="delete">Delete</button>
        						</div>
						
			
			</div>
		<div class="col-md-4 column">
	</div><br><br>
		<div class="row clearfix">
			<div class="col-md-12 column">
				<table class="table table-bordered table-hover table-condensed">
					<thead>
						<tr class="warning">
							<th>Select</th>
        					<th>Id</th>
        					<th>Name of Exam</th>
        					<th>Subject/Stream</th>
        					<th>Year of passing</th>
	        				<th>University/Board</th>
    	    				<th>Marks obtain</th>
        					<th>Remarks</th>
    					</tr>
    				</thead>
        			<?php
          				$i=0;
          				while($i<$num) {
          				$s0=mysql_result($result, $i, "sl_no");
            			$s1=mysql_result($result, $i, "user_id");
            			$s2=mysql_result($result, $i, "year_of_passing");
			            $s3=mysql_result($result, $i, "Exam");
            			$s4=mysql_result($result, $i, "board");
            			$s5=mysql_result($result, $i, "marks");
			            $s6=mysql_result($result, $i, "class");
			            $s7=mysql_result($result, $i, "remarks");
		            ?>
            		<tbody>
            			<tr class="success">
              				<td><input type='radio' name='ra' value='<?php echo $s0; ?>' required></td>
              				<td><?php echo $s1;?></td>
              				<td><?php echo $s3;?></td>
              				<td><?php echo $s6;?></td>
              				<td><?php echo $s2;?></td>
              				<td><?php echo $s4;?></td>
              				<td><?php echo $s5;?></td>
              				<td><?php echo $s7;?></td>
             			</tr>
             			<?php
             				$i++;
          					}
          				?>
				</tbody>
			</table>
		</form>
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 	<div class="modal-dialog modal-sm">
    	<div class="modal-content">
     		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h4 class="modal-title" id="myModalLabel">Add Data</h4>
      		</div>
      		<div class="modal-body">
      			<div class="row clearfix">
					<div class="col-md-12 column">
						<form action="add.php" method="post" role="form">
							<div class="form-group">
					 			<label for="exampleInputEmail1">Exam Name</label>
					 			<input type="text" class="form-control" name="examname" id="exampleInputEmail" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputPassword1">Subject</label>
					 			<input type="text" class="form-control" name="subject" id="exampleInputPassword1" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputEmail1">Year of Passing</label>
					 			<input type="text" class="form-control" name="yearofpassing" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputPassword1">University</label>
					 			<input type="text" class="form-control" name="university" id="exampleInputPassword1" />
							</div><div class="form-group">
					 			<label for="exampleInputEmail1">Mark Obtain</label>
					 			<input type="text" class="form-control" name="markobtain" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
					 			<label for="exampleInputEmail1">Remark</label>
					 			<input type="text" class="form-control" name="remark" id="exampleInputEmail1" />
							</div>
							<div class="form-group">
								<button type="submit" name="add"class="btn btn-primary">Add</button>
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
