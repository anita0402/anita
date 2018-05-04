<?php $con=mysqli_connect('localhost','root','','stud');?>


<?php
if(isset($_GET['id'])!="")
  {
  $id=$_REQUEST['id'];
  $delete=mysqli_query($con,"DELETE FROM user WHERE id='$id'");
  if($delete)
  {
      header("Location:student.p hp");
  }
  else
  {
      echo mysql_error();
  }
  }
?>