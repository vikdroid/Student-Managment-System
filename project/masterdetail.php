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
  $roll = $_SESSION['roll'];
  if($roll != 0){
	 $query="SELECT * FROM master_detail WHERE user_id='$roll'";
    $result=mysql_query($query);
    $num=mysql_num_rows($result);
    $rws1=mysql_fetch_array($result);
   echo $roll_id=$rws1['user_id'];
  }
  
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
  <div class="container"style="margin-top:100px;">
    <div class="row clearfix">
      <div class="col-md-4 column">
      </div>
      <div class="col-md-4 column">
        <form action="roll.php" method="post">
          <div class="input-group">
            <input type="text" name="roll" class="form-control" placeholder="Enter Roll">
            <span class="input-group-btn">
              <button class="btn btn-success" type="submit" name="rollsubmit">Submit</button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-md-4 column">
      </div>
	  </div>
    <div class="btn-group">
      <a href="mainmenu.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
    </div><br><br>
    <div class="row clearfix">
      <div class="col-md-12 column">
        <table class="table table-bordered table-hover table-condensed">
          <thead>
            <tr class="warning">
     		       <form action="addupdate.php" method="post">
    		          <th>Select</th>
    		          <th>Sl no.</th>
    		          <th>Id</th>
    		          <th>Qualification</th>
    		          <th>Year</th>
    		          <th>University</th>
    		          <th>Percentage</th>
    		          <th>Division</th>
    		          <th>Remark</th>
            </tr>
          </thead>
  			  <?php
            $i=0;
          	while($i<$num) {
          	   $s0=mysql_result($result, $i, "Id");
               $s1=mysql_result($result, $i, "user_id");
               $s2=mysql_result($result, $i, "Qualification");
               $s3=mysql_result($result, $i, "Year");
               $s4=mysql_result($result, $i, "University");
               $s5=mysql_result($result, $i, "Percentage");
               $s6=mysql_result($result, $i, "Division");
               $s7=mysql_result($result, $i, "Remark");
          ?>
         <tbody>
              <tr class="success">
              <td><input type='radio' name='ra' value='<?php echo $s0; ?>' required></td>
              <td><?php echo $s0;?></td>
              <td><?php echo $s1;?></td>
              <td><?php echo $s2;?></td>
              <td><?php echo $s3;?></td>
              <td><?php echo $s4;?></td>
              <td><?php echo $s5;?></td>
              <td><?php echo $s6;?></td>
              <td><?php echo $s7;?></td>
             </tr>
             <?php
             $i++;

          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="row clearfix">
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <div class="btn-group">
                <button class="btn btn-success" id="add" name="action1"  type="submit" value="add" >Add</button>
            </div>
            <div style="margin-left:10px;" class="btn-group">    
                <button class="btn btn-success" id="delete" name="action1" type="submit"  value="delete">Delete</button> 
            </div>
        </div>
        <div class="col-md-4 column">
        </div>
    </div><br><br>
    <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="row clearfix">
        <div class="col-md-3 column">
        </div>
        <div class="col-md-3 column">
            <div class="form-group">
               <input type="hidden" class="form-control" name="roll_id" value="<?php echo $roll_id ?>" id="exampleInputEmail1" />
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Qualification:</label><input type="text" class="form-control" name="Quali" id="exampleInputEmail1" />
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">University:</label><input type="text" class="form-control" name="Univ" id="exampleInputPassword1" />
            </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Division:</label><input type="text" class="form-control" name="Divs" id="exampleInputPassword1" />
            </div>
            <button type="submit" class="btn btn-success">Ok</button>
        </div>
        <div class="col-md-3 column">
          <form role="form">
            <div class="form-group">
               <label for="exampleInputEmail1">Year:</label><input type="text" class="form-control" name="Year" id="exampleInputEmail1" />
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Percentage:</label><input type="text" class="form-control" name="Perc" id="exampleInputPassword1" />
            </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Remarks:</label><input type="text" class="form-control" name="Rema" id="exampleInputPassword1" />
            </div>
            <button type="submit" class="btn btn-success">Cancel</button>
          </form>
        </div>
        <div class="col-md-3 column">
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>