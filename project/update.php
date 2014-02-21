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
    <div class="container"style="margin-top:100px;">
        <div class="row clearfix">
            <div class="col-md-4 column">
            </div>
            <div class="col-md-4 column">
<?php 
require_once 'dbconnect.php';
if($_REQUEST['action1'] == "update"){ 
    $usid=$_REQUEST['ra'];
    $sql2 ="SELECT * FROM master_details WHERE sl_no='$usid'";
    $sql3=mysql_query($sql2);
    $rws = mysql_fetch_array($sql3);
    $sl_no=$rws["sl_no"];
    $exam=$rws["Exam"];
    $class=$rws["class"];
    $yop=$rws["year_of_passing"];
    $board=$rws["board"];
    $marks=$rws["marks"];
    $remarks=$rws["remarks"];

    echo'<form action="update_process.php" method="POST" role="form" >
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="hidden" class="form-control" id="exampleInputEmail1" value="'.$sl_no.'" name="sl_no" placeholder="sl_no" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Exam :</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="'.$exam.'" name="examname" placeholder="Name of Exam" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Subject</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="subject" value="'.$class.'" placeholder="subject/Stream" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year of Passing</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="'.$yop.'" name="yearofpassing" placeholder="yearofpassing" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">University</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="university" value="'.$board.'" placeholder="university" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mark Obtain</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="'.$marks.'" name="markobtain" placeholder="marks obtain" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Remark</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" value="'.$remarks.'" name="remark" placeholder="Role" />
                    </div>
                    <div class="form-group">
                            <button type="submit" name="update"  class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 column" ">
                <div class="btn-group" style="margin-top:470px;">
                    <a href="maintain.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
                 </div>
            </div>
        </div>
    </div>
    ';}
elseif($_REQUEST['action1'] == "view"){ 
    $usid=$_REQUEST['ra'];
    $sql2 ="SELECT * FROM master_details WHERE sl_no='$usid'";
    $sql3=mysql_query($sql2);
    $rws = mysql_fetch_array($sql3);
    $exam=$rws["Exam"];
    $class=$rws["class"];
    $yop=$rws["year_of_passing"];
    $board=$rws["board"];
    $marks=$rws["marks"];
    $remarks=$rws["remarks"];

    echo '   
    <table class="table table-bordered table-hover table-condensed">
    <tr>
    <td class="warning">Exam:</td> <td class="success">'.$exam.'</td></tr>
    <tr>
    <td class="warning">Class: </td><td class="success">'.$class.'</td></tr>
    <tr>
    <td class="warning">Year of Passing:</td><td class="success">'.$yop.'</td></tr>
    <tr>
    <td class="warning">Board: </td><td class="success">'.$board.'</td></tr>
    <tr>
    <td class="warning">Marks: </td><td class="success">'.$marks.'</td></tr>
    <tr>
    <td class="warning">Remarks: </td><td class="success">'.$remarks.'</td></tr>
    </table>
    <table>
    <tr>
    <td>
    <div class="btn-group">
        <a href="maintain.php"><button class="btn btn-success" data-toggle="modal" type="submit">Back</button> </a> 
    </div>
    </td>
    </table
';}
elseif($_REQUEST['action1']=="delete"){
    # code...
    $usid=$_REQUEST['ra'];
    $sql1="DELETE FROM  master_details WHERE sl_no='$usid'";
    mysql_query($sql1);
    header('Location:maintain.php');
}
?>
