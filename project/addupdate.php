<?php
    require 'dbconnect.php';
    $user_id=$_SESSION['User_id'];
    $sl_id=$_REQUEST['roll_id'];
    if($_REQUEST['action1']=="add")
    {
       $Quali=mysql_escape_string($_REQUEST['Quali']);
       $Year=mysql_escape_string($_REQUEST['Year']);
       $Univ=mysql_escape_string($_REQUEST['Univ']);
       $Perc=mysql_escape_string($_REQUEST['Perc']);
       $Divs=mysql_escape_string($_REQUEST['Divs']);
       $Remark=mysql_escape_string($_REQUEST['Remark']);

        $sql = "INSERT INTO master_detail VALUES('','$sl_id','$Quali','$Year','$Univ','$Perc','$Divs','$Remark')";
        mysql_query($sql) or die('Database Error');
        header('location:masterdetail.php');
    }
    elseif($_REQUEST['action1']=="delete"){
    # code...
    $usid=$_REQUEST['ra'];
    $sql1="DELETE FROM  master_detail WHERE Id='$usid'";
    mysql_query($sql1);
    header('Location:masterdetail.php');
}
?>