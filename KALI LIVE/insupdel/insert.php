<?php
 ob_start();
  include("db.php");
  if(isset($_POST['send'])!="")
  {
  $image=$_FILES["file1"]["name"];
  $username=mysql_real_escape_string($_POST['username']);
  $usermail=mysql_real_escape_string($_POST['usermail']);
  $usermobile=mysql_real_escape_string($_POST['usermobile']);
  $update=mysql_query("INSERT INTO sample(uimage,username,emailid,mobileno,created)VALUES
                                      ('$image','$username','$usermail','$usermobile',now())");
									  if(move_uploaded_file($_FILES["file1"]["tmp_name"],"images/$image"))
  
  if($update)
  {
      $msg="Successfully Updated!!";
      echo "<script type='text/javascript'>alert('$msg');</script>";
      header('Location:index.php');
  }
  else
  {
     $errormsg="Something went wrong, Try again";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
  }
  }
 ob_end_flush();
?>