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
  	/*$sql1="SELECT * FROM roles WHERE user_id='$user_id'";
  	$rws1 = mysql_fetch_array(mysql_query($sql1));*/
	$sql2="SELECT * FROM selectrole WHERE user_id='$user_id'";
  $rws2 = mysql_fetch_array(mysql_query($sql2));
	$sql3 = "SELECT * FROM role";
	$result = mysql_query($sql3);
	$role = array();
	while($roles = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$role[] = $roles;
	}
/*
	foreach ($role as $ans) {
		echo $ans['role_id'];
		echo $ans['role'];
	}
	exit();*/
  $roleno = $_SESSION['Roleno'];
  $sql4 = "SELECT role_id FROM user_role WHERE user_id='$roleno'";
  $result4 = mysql_query($sql4);
  $selectedrole = array();
  while($selectedroles = mysql_fetch_array($result4, MYSQL_ASSOC)){
    $selectedrole[] = $selectedroles;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Project Lab</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
   $('#select1').click(function () {
       return !$('#select1 option:selected').remove().appendTo('#select2');
  });
   $('#select2').click(function () {
       return !$('#select2 option:selected').remove().appendTo('#select1');
  });
  });
  </script>
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
   <div class="container"style="margin-top:50px;">
    <div class="btn-group">
          <a href="mainmenu.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
        </div>
    <div class="row clearfix">
      <div class="col-md-4 column">
      </div>
      <div class="col-md-4 column">
        <form action="selectrole.php" method="post">
          <div class="input-group">
            <input type="text" name="roleno" class="form-control" placeholder="Enter Roll">
            <span class="input-group-btn">
              <button class="btn btn-success" type="submit" name="rolesubmit">Submit</button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-md-4 column">
      </div>
    </div><br><br> 
    <form action="exchangerole_process.php" method="post">
    <div class="row clearfix">
      <div class="col-md-3 column">
      </div>
      <div class="col-md-2 column">
          <div class='custom-header'>All Role</div>
           <select multiple id="select1" name="selectrole-from" style="width: 165px;">
            <?php foreach ($role as $ans) { ?>
            <option><?php echo $ans['role'] ?></option>
          <?php } ?>
          </select>
      </div>
      <div class="col-md-1 column" style="margin-top:20px;">
      <img  width="60" src="img/switch.png">
      </div>
      <div class="col-md-2 column">
          <div class='custom-header'>Your Role</div>
          <select multiple id="select2" name="selectrole_to[]" style="width: 165px;">
            <?php foreach ($selectedrole as $ans2) { ?>
              <option><?php echo $ans2['role_id'] ?> </option>
            <?php } ?>
          </select>
      </div>
       <div class="col-md-4 column">
      </div>
    </div><br>
     <div class="row clearfix" style="margin-left:200px;">
      <div class="col-md-3 column">
      </div>
      <div class="col-md-3 column" >
            <button type="submit" name="insertok" class="btn btn-success">Ok</button>
           <a> <button type="submit"  class="btn btn-success">Cancel</button></a></form>
       </div>
        <div class="col-md-3 column">
      </div>
      <div class="col-md-3 column">
      </div>
    </div>
  </div>
  </div>
</body>
</html>
