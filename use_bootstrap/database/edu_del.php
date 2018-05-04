<?php  $con=mysqli_connect('localhost','root','','bhumti');?>
<?php
  ob_start();
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysqli_query($con,"DELETE FROM education WHERE id='$delete'");
  
  if($delete)
  {
header("Location:edu_sel.php");
//echo "record deleted";
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
?>