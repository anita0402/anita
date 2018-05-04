<?php  $con=mysqli_connect('localhost','root','','2my4edge');?>
<?php
  ob_start();
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysqli_query($con,"DELETE FROM sample WHERE id='$delete'");
  
  if($delete)
  {
header("Location:index.php");
//echo "record deleted";
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>